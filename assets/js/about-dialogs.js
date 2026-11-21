document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.about-dialog-trigger[aria-controls]').forEach(function(trigger) {
        trigger.addEventListener('click', function() {
            const dialogId = trigger.getAttribute('aria-controls');
            const dialog = dialogId ? document.getElementById(dialogId) : null;

            if (!dialog || typeof dialog.showModal !== 'function') {
                console.error('About page dialog is missing or unsupported.', trigger);
                return;
            }

            dialog.showModal();
        });
    });

    document.querySelectorAll('.about-dialog').forEach(function(dialog) {
        dialog.addEventListener('click', function(event) {
            if (event.target === dialog) dialog.close();
        });
    });
});
