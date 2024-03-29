(() => {
    clockCycle();
    setInterval(clockCycle, 1000);
})();

function clockCycle() {
    let date = new Date();
    let hours = date.getHours();
    let minutes = date.getMinutes();
    updateClockFace(hours, minutes);
    updateDocumentTitle(hours, minutes, date.getSeconds());
}

function updateClockFace(hours, minutes) {

    if (hours >= 12) {
        document.querySelector(".left .short .char[data-index='0']").innerHTML = "P";
        hours = hours -= 12;
    } else {
        document.querySelector(".left .short .char[data-index='0']").innerHTML = "A";
    }

    hours = parseTimeIntoArray(hours);
    minutes = parseTimeIntoArray(minutes);

    document.querySelector(".hour .digit[data-index='0']").innerHTML = hours[0];
    document.querySelector(".hour .digit[data-index='1']").innerHTML = hours[1];

    document.querySelector(".minute .digit[data-index='0']").innerHTML = minutes[0];
    document.querySelector(".minute .digit[data-index='1']").innerHTML = minutes[1];
}

function updateDocumentTitle(hours, minutes, seconds) {
    let h24 = `${formatNumber(hours)}:${formatNumber(minutes)}:${formatNumber(seconds)}`;
    let suffix = "AM";
    if (hours >= 12) {
        hours = hours -= 12;
        suffix = "PM";
    }
    let h12 = `${formatNumber(hours)}:${formatNumber(minutes)}:${formatNumber(seconds)} ${suffix}`;
    document.title = `${h24} | ${h12}`;
}

function formatNumber(number) {
    return number <= 9 ? `0${number}` : number;
}

function parseTimeIntoArray(time) {
    let chars = time.toString().split("");
    if (chars.length === 1) {
        return [
            0,
            chars[0]
        ];
    } else {
        return chars;
    }
}