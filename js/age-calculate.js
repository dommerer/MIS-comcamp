function ageCalculator() {
    var dob = document.getElementById("birthdate").value;
    var year = Number(dob.substr(0, 4));
    var month = Number(dob.substr(5, 2)) - 1;
    var day = Number(dob.substr(8, 2));
    var today = new Date();
    var age = today.getFullYear() - year;
    console.log(dob);
    console.log(year);
    console.log(month);
    console.log(day);
    console.log(today);
    console.log(age);
    if (today.getMonth() < month || (today.getMonth() == month && today.getDate() < day)) {
        age--;
    }
    document.getElementById("age").value = age;
}