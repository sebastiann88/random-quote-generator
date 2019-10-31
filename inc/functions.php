<?php 
// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
$quotes = [
    // Each inner array element should be an associative array
    [ 'quote'      => 'You must be the change you want to see in the world.',
      'source'     => 'Mahatma Gandhi',
      'citation'   => 'Quoted in L.A. Times, 30 July 1989.',
      'year'       => '1989'
    ],

    [ 'quote'      => 'I have never let my schooling interfere with my education.',
      'source'     => 'Mark Twain',
      'citation'   => 'Advertisement for Daisy Air Rifle',
      'year'       => '1907'
    ],

    [ 'quote'      => 'The Mind Is Not a Vessel That Needs Filling, But Wood That Needs Igniting',
      'source'     => 'Plutarch',
      'citation'   => 'The essay “On Listening” in Moralia',
      'year'       => '50 to 120 AD'
    ],

    [ 'quote'      => 'We are what we repeatedly do; excellence, then, is not an act, but a habit.',
      'source'     => 'Will Durant',
      'citation'   => 'Quoted in the book: The Story of Philosophy',
      'year'       => '1926'
    ],

    [ 'quote'      => 'The weak can never forgive. Forgiveness is the attribute of the strong.',
      'source'     => 'Mahatma Gandhi',
      'citation'   => 'Quoted in Young India 2, April 1931',
      'year'       => '1931'
    ],
];


// Create the getRandomQuote function and name it getRandomQuote
function getRandomQuote() {
  global $quotes;
  // generate a random number between 0 and the last index in the array parameter
  $randomNumber = rand(0, 4);
  // use the random number and box notation to grab a random item from the array
  // return the random item
  return $quotes[$randomNumber];
}



// Create the printQuote funtion and name it printQuote
function printQuote() {
  // create a variable that calls the getRandomQuote() function, passing in the quotes array as an argument
  $quote = getRandomQuote();
  // create a variable that initiates your HTML string
  // using the template in the project instructions, add the two default quote properties
  $displayQuote =  '<p class="quote">' . $quote['quote'] . '</p>';
  $displayQuote .= '<p class="source">' . $quote['source'];
                    // if the quote contains a citation value, add it the string
  if (isset($quote['citation'])) {
      $displayQuote .= '<span class="citation">' . $quote['citation'] . '</span>';
  }
  // if the quote contains a year value, add it the string
  if (isset($quote['year'])) {
      $displayQuote .= '<span class="citation">' . $quote['year'] . '</span>';
  }
  // close the string with the necessary closing HTML tags
  $displayQuote .= '</p>';
    // display the complete HTML string
  return $displayQuote;
}

?>