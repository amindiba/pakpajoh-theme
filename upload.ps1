# PakPajoh Uploader (با غیرفعال‌سازی پراکسی)
param([string[]]$Files)

function Upload-SingleFile {
    param($LocalPath, $RemotePath, $FtpHost, $FtpUser, $FtpPass)

    $ftpUri = "ftp://" + $FtpHost + $RemotePath
    try {
        $req = [System.Net.FtpWebRequest]::Create($ftpUri)
        $req.Method = [System.Net.WebRequestMethods+Ftp]::UploadFile
        $req.Credentials = New-Object System.Net.NetworkCredential($FtpUser, $FtpPass)
        $req.UseBinary = $true
        $req.UsePassive = $true
        $req.Proxy = $null
        $req.Timeout = 30000
        $req.ReadWriteTimeout = 30000

        $fileContent = [System.IO.File]::ReadAllBytes($LocalPath)
        $req.ContentLength = $fileContent.Length
        $stream = $req.GetRequestStream()
        $stream.Write($fileContent, 0, $fileContent.Length)
        $stream.Close()
        $response = $req.GetResponse()
        $response.Close()

        return $true
    } catch {
        Write-Host "خطا: $($_.Exception.Message)" -ForegroundColor Red
        return $false
    }
}

function Create-FtpDirectory {
    param($FtpHost, $User, $Pass, $RemoteDir)
    $parts = $RemoteDir -split "/"
    $currentPath = ""
    foreach ($part in $parts) {
        if ([string]::IsNullOrEmpty($part)) { continue }
        $currentPath += "/" + $part
        try {
            $req = [System.Net.FtpWebRequest]::Create("ftp://" + $FtpHost + $currentPath)
            $req.Method = [System.Net.WebRequestMethods+Ftp]::MakeDirectory
            $req.Credentials = New-Object System.Net.NetworkCredential($User, $Pass)
            $req.Proxy = $null
            $req.GetResponse().Close()
        } catch { }
    }
}

function Upload-ToPakPajohHost {
    param([string[]]$FileList)

    $LocalBase = "C:\P\projects\pakpajoh"
    $FtpHost = "ftp.pakpajoh.ir"
    $FtpUser = "A4site@pakpajoh.ir"
    $FtpPass = "AminMb1765!!!@@@"
    $RemoteBase = "/public_html/wp-content/themes/pakpajoh_a4site_theme"

    $successCount = 0
    $errorCount = 0

    foreach ($file in $FileList) {
        $localPath = Join-Path $LocalBase $file
        if (-not (Test-Path $localPath)) {
            Write-Host "File not found: $file" -ForegroundColor Red
            $errorCount++
            continue
        }

        $remoteDir = Split-Path $file -Parent
        if ($remoteDir) {
            $remoteDir = $remoteDir -replace "\\\\", "/"
            $fullRemoteDir = $RemoteBase + "/" + $remoteDir
            Create-FtpDirectory -FtpHost $FtpHost -User $FtpUser -Pass $FtpPass -RemoteDir $fullRemoteDir
            $remotePath = $fullRemoteDir + "/" + (Split-Path $file -Leaf)
        } else {
            $remotePath = $RemoteBase + "/" + (Split-Path $file -Leaf)
        }

        Write-Host "Uploading: $file" -ForegroundColor Yellow
        $result = Upload-SingleFile -LocalPath $localPath -RemotePath $remotePath -FtpHost $FtpHost -FtpUser $FtpUser -FtpPass $FtpPass

        if ($result) {
            Write-Host "Uploaded: $file" -ForegroundColor Green
            $successCount++
        } else {
            $errorCount++
        }
    }

    Write-Host "Success: $successCount" -ForegroundColor Green
    Write-Host "Failed: $errorCount" -ForegroundColor Red
}

if ($Files) {
    Upload-ToPakPajohHost -FileList $Files
} else {
    Write-Host "Usage: .\upload.ps1 -Files style.css"
}
