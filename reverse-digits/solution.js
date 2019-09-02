function reverse_digits(number) {
    let answer = 0;
    let is_negative = false;
    if ( number < 0 ) {
        is_negative = true;
    }
    number = Math.abs(number);
    while ( number > 0 ) {
        let pop = number % 10;
        answer = answer * 10 + pop;
        number = Math.floor(number/10);
    }
    if ( is_negative ) {
        answer = 0 - answer;
    }
    return answer;
}

console.assert(reverse_digits(234) == 432);
console.assert(reverse_digits(12003) == 30021);
console.assert(reverse_digits(-2198) == -8912);