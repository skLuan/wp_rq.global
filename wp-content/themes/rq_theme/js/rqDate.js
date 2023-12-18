window.addEventListener('load', (e)=> {
    console.log('------------------ date Init');
    var DateTime = luxon.DateTime;
    const FORMAT_DATE = ['months', 'days', 'hours', 'minutes', 'seconds'];
    const FESTIVAL_DATE = {
        year: 2024,
        month: 6,
        day: 14,
        hour: 8,
        minute: 0,
    };
    const DOMdates = document.querySelectorAll('.counter');
    console.log(DOMdates);
    var dateNow = DateTime.now();
    var festival = DateTime.fromObject(FESTIVAL_DATE);
    var diff = festival.diff(dateNow, FORMAT_DATE);
    
    function updateDate() {
        diff = festival.diffNow(FORMAT_DATE);
        DOMdates.forEach(counter => {
        counter.textContent = diff.toFormat('M:dd:hh:mm');
        });
    }
    updateDate();

    setInterval(() => {
        updateDate();
    }, 10*1000);


})