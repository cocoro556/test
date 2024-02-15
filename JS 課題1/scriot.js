
const start = '<p>ココカラ--------------------</p>';

const end = '<p>-------------------ココマデ</p><br>';

// 問1
document.write('問1' + [start]);
for (let a = 1; a < 6; a++) {// a
// for (let a = 1; a <= 5; a++) {// b
    document.write('★');
}
document.write(end);


// 問2
document.write('問2' + [start]);
// for (let line = 0; line < 2; line++) {// a
for (let line = 0; line <= 1; line++) {// b
// for (let b = 1; b <= 2; b++) {// c
// for (let b = 1; b < 3; b++) {// d
    for (let c = 1; c <= 3; c++) {
        document.write('★');
    }
    document.write('<br>');
}
document.write(end);

// 問3
document.write('問3' + [start]);
for (let b = 1; b <= 2; b++) {
    for (let c = 1; c <= 5; c++) {
        document.write('☆');
    }
    document.write('<br>');
}
document.write(end);

// 問4
document.write('問4' + [start]);
for (let b = 1; b <= 4; b++) {
    for (let c = 1; c <= 5; c++) {
        document.write('★');
    }
    document.write('<br>');
}
document.write(end);

// 問5
document.write('問5' + [start]);
for (let b = 1; b <= 4; b++) {
    for (let c = 1; c <= 3; c++) {
        document.write('★');
    }
    document.write('<br>');
}
document.write(end);

// 問6
document.write('問6' + [start]);
for (let b = 1; b <= 3; b++) {
    for (let c = 1; c <= 3; c++) {
        if (c % 2 === 0) {
            document.write('☆');
        } else {
            document.write('★');
        }
    }
    document.write('<br>');
}
document.write(end);

// 問7
document.write('問7' + [start]);
for (let b = 1; b <= 4; b++) {
    for (let c = 1; c <= 5; c++) {
        if (c % 2 !== 1) {
            document.write('☆');
        } else {
            document.write('★');
        }
    }
    document.write('<br>');
}
document.write(end);

// 問8
document.write('問8' + [start]);
for (let i = 1; i <= 5; i++) {
    for (let o = 1; o <= i; o++) {
        document.write('★');
    }
    document.write('<br>');
}
document.write(end);
