<?php

class CrypticEmpyreal {
    private $message;
    private $attempts;

    public function __construct() {
        $this->message = "Rdvh jxuqj sd rdvhj, htrj kxn jxuqj sd jxuqj."
        $this->attempts = 0;
    }

    public function play() {
        echo "Welcome to CrypticEmpyreal!\n";
        echo "Can you decipher the cryptic message?\n";

        while (true) {
            $this->displayMessage();
            $guess = readline("Enter your guess: ");

            if ($this->decode($guess)) {
                echo "Congratulations! You've deciphered the message.\n";
                break;
            } else {
                echo "Sorry, that's not correct. Keep trying.\n";
                $this->attempts++;
            }
        }

        echo "You solved the message in " . ($this->attempts + 1) . " attempts!\n";
    }

    private function displayMessage() {
        $decodedMessage = $this->decode($this->message);
        echo "Cryptic Message: {$this->message}\n";
        echo "Decoded Message: $decodedMessage\n";
    }

    private function decode($input) {
        // Perform your decoding logic here
        // For simplicity, we'll just compare the input to a known decoded message
        $decodedMessage = "When the night is darkest, heroes are born.";
        return strtolower($input) === strtolower($decodedMessage);
    }
}

// Start the game
$crypticGame = new CrypticEmpyreal();
$crypticGame->play();

?>
