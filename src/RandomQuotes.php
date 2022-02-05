<?php

namespace RandomQuotes;
class RandomQuotes {

    protected function loadQuoteJson() : array {
        // Get the list of quotes.
        $quotes = file_get_contents( __DIR__ . '/../resource/data.json' );
        // Convert JSON document to PHP array.
        $quotes = json_decode( $quotes, true );
        // Get a random index number.
        $index = mt_rand( 0, count( $quotes ) );
        // Return the random quote.
        return $quotes[ $index ];
    }
    
    public function generate() : string {
        $quote = $this->loadQuoteJson();
        $quote = $quote['quoteText']." - ".$quote['author'];
        return $quote;
    }
}