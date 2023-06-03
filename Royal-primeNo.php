function isPrime($number) {
    // Check if the number is less than 2
    if ($number < 2) {
        return false;
    }

    // Loop from 2 to the square root of the number
    for ($i = 2; $i <= sqrt($number); $i++) {
        // Check if the number is divisible by any value in the loop
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

$number = 27;
if (isPrime($number)) {
    echo $number . " is a prime number.";
} else {
    echo $number . " is not a prime number.";
}
