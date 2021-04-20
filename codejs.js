//Przyklejona nawigacja
window.onscroll = function() {przyklejNawigacje()};

var navbar = document.getElementById('nav');

var przyklej = navbar.offsetTop;

function przyklejNawigacje() {
    if (window.pageYOffset >= przyklej) {
    navbar.classList.add('nav-przyklejona')
    } else {
        navbar.classList.remove('nav-przyklejona');
    }
}

//Funkcja przesuwania po wybranej sekcji po nacisnieciu przycisku w nawigacji
function scrollujDo(nazwa){
    document.getElementById(nazwa).scrollIntoView({behavior:'smooth', block: 'center'});
}

//Walidacje formularza
const przycisk = document.querySelector('#przycisk');

const imie = document.querySelector('#name');
const nazwisko = document.querySelector('#lastName');
const email = document.querySelector('#email');
const phone = document.querySelector('#phone');
const data = document.querySelector('#date');
const hour = document.querySelector('#hour');
const cel = document.querySelector('#cel');

const numberOfNecessaryFields = [imie, nazwisko, email, phone, data, hour, cel].length;

const emailPattern = new RegExp(/[a-z0-9\.+_-]+@[a-z0-9]+(\.[a-z0-9]+)*\.[a-z]{2,3}/i);
const phonePattern = new RegExp(/^(?:\(?\?)?(?:[-\.\(\)\s]*(\d)){9}\)?$/i);

const hourValues = ["10:00","10:30","11:00","11:30","12:00","12:30","13:00","13:30","14:00","14:30","15:00","15:30","16:00"];

function sprawdzDlugosc(valueLength, minLength) {
    return valueLength >= minLength;
}

function sprawdzZeWzorcem(value, pattern) {
    return pattern.test(value);
}

function validateTextData() {
    this.className = sprawdzDlugosc(this.value.length, 2) ? 'validated' : 'invalid';
    checkValidation();
}

function validateEmail() {
    this.className = (sprawdzDlugosc(this.value.length, 5) && sprawdzZeWzorcem(this.value, emailPattern)) ? 'validated' : 'invalid';
    checkValidation();
}

function validatePhone() {
    this.className = sprawdzZeWzorcem(this.value, phonePattern) ? 'validated' : 'invalid';
    checkValidation();
}
function validateDate(){
    let d = this.valueAsDate;
    let dNow = new Date();

    d.setHours(0,0,0,0);
    dNow.setHours(0,0,0,0);

    this.className = (d >= dNow && d.getDay() != 0) ? 'validated':'invalid';
    checkValidation();
}

function validateHour(){
    let hourValue = this.value;
    for(i = 0; i<hourValues.length; i++)
    {
        if(hourValue == hourValues[i])
        {
            this.className = 'validated';
            break;
        }else{
            this.clasName = 'invalid';
        }
    }
    checkValidation();
}

function validateCel(){
    var celValue = this.value;
    this.className = (celValue <= 7) ? 'validated':'invalid';
    checkValidation();
}

function checkValidation(){
    const numberOfValidElements = document.querySelectorAll('.validated').length;
    if(numberOfNecessaryFields == numberOfValidElements)
    {
        przycisk.removeAttribute('disabled');
        przycisk.className='submit-enabled';
    }else{
        przycisk.setAttribute('disabled',true);
        przycisk.className='submit-disabled';
    }
}

imie.onchange = validateTextData;
nazwisko.onchange = validateTextData;
email.onchange = validateEmail;
phone.onchange = validatePhone;
data.onchange = validateDate;
hour.onchange = validateHour;
cel.onchange = validateCel;