function leavePage() {
    window.onbeforeunload = function() {
        return "Sunteți siguri că doriți să treceți la o altă pagină?";
    }
}