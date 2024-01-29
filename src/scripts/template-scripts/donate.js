const clipboard = new ClipboardJS('.copy-to-clipboard');

const copyBtn = document.querySelectorAll('.copy-to-clipboard');

clipboard.on("success", (e) => onSuccessCopy(e));

function onSuccessCopy(e) {
    console.log(e.trigger)
    e.trigger.classList.add('tooltiped');
    setTimeout(() => e.trigger.classList.remove('tooltiped'), 1000);
}