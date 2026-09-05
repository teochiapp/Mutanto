const languageTxt = {
    es: ["Debes ingresar ", "tu nombre", "tu e-mail", "una descripción de tu proyecto", "El archivo debe ser menor a 25 MB", "Ingresa un e-mail válido"],
    en: ["You must enter ", "your name", "your email", "something about your project", "File must be smaller than 25MB", "Enter a valid email address"],
},
fileInput = document.getElementById("muntanto__contacto-form-input-file"),
divFile = document.querySelector(".muntanto__contacto-form-err-file"),
divName = document.querySelector(".muntanto__contacto-form-err-name"),
divEmail = document.querySelector(".muntanto__contacto-form-err-email"),
divComment = document.querySelector(".muntanto__contacto-form-err-comments");
let arrayFlag = [0, 0, 0];
function sendContent() {
let t = document.querySelector("#muntanto__contacto-form-input-name").value,
    e = document.querySelector("#muntanto__contacto-form-input-email").value,
    n = document.querySelector("#muntanto__contacto-form-input-comments").value,
    k = document.querySelector("#muntanto__contacto-form-input-know").value,
    a = document.querySelector("#muntanto__contacto-form-input-file").files[0];
if (
    (checkEmptyField(t, divName, languageTxt[language][1], 0),
    checkEmptyField(e, divEmail, languageTxt[language][2], 1),
    checkEmptyField(n, divComment, languageTxt[language][3], 2),
    1 != arrayFlag[1] && (validator.isEmail(e) ? ((arrayFlag[1] = 0), (divEmail.innerHTML = "")) : ((arrayFlag[1] = 2), (divEmail.innerHTML = "👆 " + languageTxt[language][5]), divEmail.classList.toggle("scale-in-ver-bottom"))),
    0 == arrayFlag[0] && 0 == arrayFlag[1] && 0 == arrayFlag[2])
) {
    document.querySelector(".mutanto__contacto-form-inputs").classList.add("hidden"),
        document.querySelector(".mutanto__contacto-form-ajax").classList.add("visible"),
        document.querySelector("#sendButtonM").classList.add("hidden"),
        document.querySelector("#sendButton").classList.add("hidden");
    let o = new XMLHttpRequest(),
        c = new FormData();
    c.append("muntanto__contacto-form-input-name", t),
        c.append("muntanto__contacto-form-input-email", e),
        c.append("muntanto__contacto-form-input-comments", n),
        c.append("muntanto__contacto-form-input-know", k),
        c.append("muntanto__contacto-form-input-file", a),
        o.open("POST", "_send.php", !0),
        (o.onload = function () {
            200 === o.status
                ? (document.querySelector(".dots-container").classList.add("hidden"),
                  getWindowWidth() < mobiles &&
                      (document.querySelector(".mutanto__contacto-form-ajax").classList.add("mutanto__contacto-form-ajaxM"), document.querySelector(".mutanto__contacto-form-table-form").classList.add("mutanto__contacto-form-ajaxM")),
                  (document.querySelector(".mutanto__contacto-form-ajax-txt").innerHTML = o.responseText))
                : (document.querySelector(".mutanto__contacto-form-ajax-txt").innerHTML = o.status);
        }),
        o.send(c);
}
}
function checkEmptyField(t, e, n, a) {
validator.isEmpty(t) ? ((e.innerHTML = "👆 " + languageTxt[language][0] + n), e.classList.toggle("scale-in-ver-bottom"), (arrayFlag[a] = 1)) : ((e.innerHTML = ""), (arrayFlag[a] = 0));
}
fileInput.addEventListener("change", function () {
let t = fileInput.files[0].size,
    e = Math.round(t / 1024);
divFile.innerHTML = e > 25600 ? "👆 " + languageTxt[language][4] : "";
}),
document.querySelector("#sendButtonM").addEventListener("click", function () {
    sendContent();
}),
document.querySelector("#sendButton").addEventListener("click", function () {
    sendContent();
});
