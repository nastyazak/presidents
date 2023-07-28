var first=1;
var last=15;
var countCut = 50;
var heightImg = 1300;
var timeChange = 1000;
/*
*@Функция, которая делит каждую картинку на горизонтальные полоски
*
*@param
*@переменные : heightImg, countCut, html, img
*/
function createImg() {
    for (var i = 0; i < countCut; i++) {
        var html = "<div class='" + i + "'></div>";
        var img = $(html);
        img.css("background-position", "0px -" + i * heightImg / countCut + "px");
        img.appendTo("#gallery");
    }
    $("#gallery div").css("height", heightImg / countCut + "px");
}
/*
*@Функция, которая делает эффект для каждой картинки, в зависимости от ее номера
*
*@Эффекты: сплющивание картинки, сворачивание в бок, появление снизу вверх или сверху вниз
*
*@param
*@переменные : j, first, timeChange, countCut
*/
function changeImg () {
    var j;
    if(first % 4 ==0) {
        /*картинка сплющивается*/
        $("#gallery div").each(function() {
            $(this).toggle(timeChange, function () {
                $(this).css('background-image', 'url("image/' + first + '.jpg")');
                $(this).toggle(timeChange);
            });
        });
    }
    else if(first % 3 ==0) {
        /*картинка сворачивается в бок*/
        $("#gallery div").each(function() {
            $(this).slideToggle(timeChange, function () {
                $(this).css('background-image', 'url("image/' + first + '.jpg")');
                $(this).slideToggle(timeChange);
            })
        });
    }
    else if(first % 2 ==0){
        j=1;
        /*fadeOut - исчезновение картинки, fadeIn - появление картинки*/
        $("#gallery div").each(function() {
            $(this).fadeOut(10 * j, function () {
                $(this).css('background-image', 'url("image/' + first + '.jpg")');
                $(this).fadeIn(10 * j);
            });
            j++;
        });
    }
    else {
        j=countCut;
        /*fadeOut - исчезновение картинки, fadeIn - появление картинки*/
        $("#gallery div").each(function() {
            $(this).fadeOut(10 * j, function () {
                $(this).css('background-image', 'url("image/' + first + '.jpg")');
                $(this).fadeIn(10 * (countCut - j));
            });
            j--;
        });
    }
}
/*
*@функция, обрабатывающая стрелку влево; вызывающая changeImg
*
*@param
*@переменные : first, last
*/
function leftRun() {
    first--;
    if(first<1) {
        first=last;
    }
    changeImg();
}
/*
*@Функция, обрабатывающая стрелку вправо; вызывающая changeImg
*
*@param
*@переменные : first, last
*/
function rightRun() {
    first++;
    if(first>last) {
        first=1;
    }
    changeImg();
}
/*
*@Функция, вызывающая changeImg и createImg
*
*@param
*/
function beginGal() {
    createImg();
    changeImg();
}