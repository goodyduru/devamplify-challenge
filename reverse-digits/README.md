### Algorithm

* First get the number you want to reverse as an input.
* Initialize the answer to 0
* Set a boolean variable to true if the number is less than 0 else false.
* Set the input number to its absolute value e.g -5 becomes 5.
* While the input number is greater than zero:
    * Get the remainder when the number is divided by ten.
    * Add the remainder to ten times the current answer and set the answer to the result
    * Set the input number to itself divided by 10 and round it down to its nearest integer.
* Set the answer to its negative value if the input number was negative.
* Return this answer.