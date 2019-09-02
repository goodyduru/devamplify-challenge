def reverse_digits(number):
    answer = 0
    is_negative = False
    if number < 0:
        is_negative = True
    number = abs(number)
    while number > 0:
        pop = number % 10
        answer = answer * 10 + pop
        number = number // 10
    if is_negative:
        answer = -answer
    return answer

if __name__ == "__main__":
    assert reverse_digits(234) == 432
    assert reverse_digits(12003) == 30021
    assert reverse_digits(-2198) == -8912
