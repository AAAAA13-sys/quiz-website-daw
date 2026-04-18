<?php
/**
 * Question Pool with Multi-Topic Support
 */

$questionPool = [
    'PHP' => [
        // --- EASY (34) ---
        [
            "id" => 1,
            "question" => "What does PHP stand for?",
            "options" => ["Personal Home Page", "PHP: Hypertext Preprocessor", "Private Hypertext Processor", "Public Hypertext Page"],
            "answer" => "PHP: Hypertext Preprocessor",
            "difficulty" => "Easy"
        ],
        [
            "id" => 2,
            "question" => "Which superglobal is used to collect form data after submitting an HTML form with method='post'?",
            "options" => ["\$_GET", "\$_REQUEST", "\$_POST", "\$_SERVER"],
            "answer" => "\$_POST",
            "difficulty" => "Easy"
        ],
        [
            "id" => 3,
            "question" => "Which symbol is used to start a variable in PHP?",
            "options" => ["&", "#", "!", "\$"],
            "answer" => "\$",
            "difficulty" => "Easy"
        ],
        [
            "id" => 4,
            "question" => "How do you write 'Hello World' in PHP?",
            "options" => ["Document.Write('Hello World');", "echo 'Hello World';", "println('Hello World');", "response.write('Hello World');"],
            "answer" => "echo 'Hello World';",
            "difficulty" => "Easy"
        ],
        [
            "id" => 5,
            "question" => "All PHP variables must begin with which character?",
            "options" => ["&", "!", "\$", "%"],
            "answer" => "\$",
            "difficulty" => "Easy"
        ],
        [
            "id" => 6,
            "question" => "PHP server scripts are surrounded by which delimiters?",
            "options" => ["<script>...</script>", "<?php...?>", "<?...?>", "<&>...</&>"],
            "answer" => "<?php...?>",
            "difficulty" => "Easy"
        ],
        [
            "id" => 7,
            "question" => "Which of the following is the correct way to end a PHP statement?",
            "options" => [".", ";", "!", "New line"],
            "answer" => ";",
            "difficulty" => "Easy"
        ],
        [
            "id" => 8,
            "question" => "How do you create a comment in PHP?",
            "options" => ["//", "/*...*/", "#", "All of the above"],
            "answer" => "All of the above",
            "difficulty" => "Easy"
        ],
        [
            "id" => 9,
            "question" => "Is PHP case-sensitive when it comes to variable names?",
            "options" => ["Yes", "No"],
            "answer" => "Yes",
            "difficulty" => "Easy"
        ],
        [
            "id" => 10,
            "question" => "What is the correct way to include a file in PHP?",
            "options" => ["include 'filename.php';", "using 'filename.php';", "import 'filename.php';", "require_file('filename.php');"],
            "answer" => "include 'filename.php';",
            "difficulty" => "Easy"
        ],
        [
            "id" => 11,
            "question" => "Which function is used to get the length of a string?",
            "options" => ["length()", "strlen()", "str_len()", "count()"],
            "answer" => "strlen()",
            "difficulty" => "Easy"
        ],
        [
            "id" => 12,
            "question" => "Which operator is used for concatenation in PHP?",
            "options" => ["+", ".", "&", "*"],
            "answer" => ".",
            "difficulty" => "Easy"
        ],
        [
            "id" => 13,
            "question" => "Which function returns the number of elements in an array?",
            "options" => ["count()", "size()", "elements()", "length()"],
            "answer" => "count()",
            "difficulty" => "Easy"
        ],
        [
            "id" => 14,
            "question" => "What is the result of 5 + '5' in PHP?",
            "options" => ["10", "55", "Error", "5 + 5"],
            "answer" => "10",
            "difficulty" => "Easy"
        ],
        [
            "id" => 15,
            "question" => "Which keyword is used to declare a constant?",
            "options" => ["const", "define", "Both const and define", "static"],
            "answer" => "Both const and define",
            "difficulty" => "Easy"
        ],
        [
            "id" => 16,
            "question" => "Which superglobal is used to collect form data from method='get'?",
            "options" => ["\$_POST", "\$_GET", "\$_REQUEST", "\$_SERVER"],
            "answer" => "\$_GET",
            "difficulty" => "Easy"
        ],
        [
            "id" => 17,
            "question" => "How do you start a session in PHP?",
            "options" => ["session_start();", "start_session();", "begin_session();", "session();"],
            "answer" => "session_start();",
            "difficulty" => "Easy"
        ],
        [
            "id" => 18,
            "question" => "Which tag is used for an auto-echo in PHP?",
            "options" => ["<?= ?>", "<% %>", "<?php echo ?>", "<var> </var>"],
            "answer" => "<?= ?>",
            "difficulty" => "Easy"
        ],
        [
            "id" => 19,
            "question" => "Does PHP require you to define the data type of a variable?",
            "options" => ["Yes", "No"],
            "answer" => "No",
            "difficulty" => "Easy"
        ],
        [
            "id" => 20,
            "question" => "Which of the following is NOT a valid variable name?",
            "options" => ["\$myVar", "\$_myVar", "\$1myVar", "\$my_Var"],
            "answer" => "\$1myVar",
            "difficulty" => "Easy"
        ],
        [
            "id" => 21,
            "question" => "What is the correct way to create a function in PHP?",
            "options" => ["function myFunction()", "create myFunction()", "new function myFunction()", "def myFunction()"],
            "answer" => "function myFunction()",
            "difficulty" => "Easy"
        ],
        [
            "id" => 22,
            "question" => "How do you call a function named 'myFunction'?",
            "options" => ["myFunction();", "call myFunction();", "myFunction.call();", "execute myFunction();"],
            "answer" => "myFunction();",
            "difficulty" => "Easy"
        ],
        [
            "id" => 23,
            "question" => "Which type of array uses strings as keys?",
            "options" => ["Indexed array", "Associative array", "Multidimensional array", "Object array"],
            "answer" => "Associative array",
            "difficulty" => "Easy"
        ],
        [
            "id" => 24,
            "question" => "Which operator is used to check if two values and types are equal?",
            "options" => ["==", "===", "=", "!=="],
            "answer" => "===",
            "difficulty" => "Easy"
        ],
        [
            "id" => 25,
            "question" => "What does the 'break' statement do in a loop?",
            "options" => ["Skips one iteration", "Exits the loop", "Starts the loop over", "Slows down the loop"],
            "answer" => "Exits the loop",
            "difficulty" => "Easy"
        ],
        [
            "id" => 26,
            "question" => "Which function is used to find the position of the first occurrence of a substring in a string?",
            "options" => ["strpos()", "substr()", "str_find()", "search()"],
            "answer" => "strpos()",
            "difficulty" => "Easy"
        ],
        [
            "id" => 27,
            "question" => "What is the result of 10 % 3?",
            "options" => ["1", "3", "0.33", "Error"],
            "answer" => "1",
            "difficulty" => "Easy"
        ],
        [
            "id" => 28,
            "question" => "Which function is used to convert a string to all lowercase?",
            "options" => ["lower()", "strlower()", "strtolower()", "case_lower()"],
            "answer" => "strtolower()",
            "difficulty" => "Easy"
        ],
        [
            "id" => 29,
            "question" => "Which function is used to check if a variable is set and is not NULL?",
            "options" => ["is_null()", "isset()", "is_set()", "empty()"],
            "answer" => "isset()",
            "difficulty" => "Easy"
        ],
        [
            "id" => 30,
            "question" => "What logic does the '||' operator represent?",
            "options" => ["AND", "OR", "NOT", "XOR"],
            "answer" => "OR",
            "difficulty" => "Easy"
        ],
        [
            "id" => 31,
            "question" => "What logic does the '&&' operator represent?",
            "options" => ["AND", "OR", "NOT", "XOR"],
            "answer" => "AND",
            "difficulty" => "Easy"
        ],
        [
            "id" => 32,
            "question" => "How do you output the data type and value of a variable?",
            "options" => ["var_dump()", "print_r()", "echo", "info()"],
            "answer" => "var_dump()",
            "difficulty" => "Easy"
        ],
        [
            "id" => 33,
            "question" => "Which keyword is used to include a file and stop execution if it file is missing?",
            "options" => ["include", "require", "import", "open"],
            "answer" => "require",
            "difficulty" => "Easy"
        ],
        [
            "id" => 34,
            "question" => "Which function is used to remove whitespace from both sides of a string?",
            "options" => ["strip()", "trim()", "clean()", "cut()"],
            "answer" => "trim()",
            "difficulty" => "Easy"
        ],

        // --- MEDIUM (33) ---
        [
            "id" => 35,
            "question" => "What is the purpose of the 'foreach' loop?",
            "options" => ["To iterate over an array", "To loop a specific number of times", "To loop while a condition is true", "To define a function"],
            "answer" => "To iterate over an array",
            "difficulty" => "Medium"
        ],
        [
            "id" => 36,
            "question" => "What is the difference between include and require?",
            "options" => ["Include generates a fatal error", "Require generates a warning", "Require generates a fatal error", "There is no difference"],
            "answer" => "Require generates a fatal error",
            "difficulty" => "Medium"
        ],
        [
            "id" => 37,
            "question" => "How can you get the current Unix timestamp in PHP?",
            "options" => ["date()", "timestamp()", "time()", "now()"],
            "answer" => "time()",
            "difficulty" => "Medium"
        ],
        [
            "id" => 38,
            "question" => "Which superglobal holds information about the browser (User Agent)?",
            "options" => ["\$_SERVER", "\$_ENV", "\$_BROWSER", "\$_REQUEST"],
            "answer" => "\$_SERVER",
            "difficulty" => "Medium"
        ],
        [
            "id" => 39,
            "question" => "What does array_push expect as its first argument?",
            "options" => ["The value to add", "The array to add to", "The key for the value", "The size of the array"],
            "answer" => "The array to add to",
            "difficulty" => "Medium"
        ],
        [
            "id" => 40,
            "question" => "Which function joins array elements with a string?",
            "options" => ["split()", "implode()", "join()", "Both implode() and join()"],
            "answer" => "Both implode() and join()",
            "difficulty" => "Medium"
        ],
        [
            "id" => 41,
            "question" => "Which function splits a string into an array?",
            "options" => ["split()", "implode()", "explode()", "str_split()"],
            "answer" => "explode()",
            "difficulty" => "Medium"
        ],
        [
            "id" => 42,
            "question" => "How do you destroy a single session variable?",
            "options" => ["session_destroy()", "unset(\$_SESSION['var'])", "session_unset()", "remove(\$_SESSION['var'])"],
            "answer" => "unset(\$_SESSION['var'])",
            "difficulty" => "Medium"
        ],
        [
            "id" => 43,
            "question" => "What is the effect of using 'array_pop' on an array?",
            "options" => ["Removes the first element", "Removes the last element", "Sorts the array", "Adds a new element"],
            "answer" => "Removes the last element",
            "difficulty" => "Medium"
        ],
        [
            "id" => 44,
            "question" => "What is the effect of using 'array_shift' on an array?",
            "options" => ["Removes the first element", "Removes the last element", "Sorts the array", "Adds a new element"],
            "answer" => "Removes the first element",
            "difficulty" => "Medium"
        ],
        [
            "id" => 45,
            "question" => "Which function searches an array for a specific value and returns the key?",
            "options" => ["in_array()", "array_search()", "array_keys()", "find_in_array()"],
            "answer" => "array_search()",
            "difficulty" => "Medium"
        ],
        [
            "id" => 46,
            "question" => "In which superglobal is information about uploaded files stored?",
            "options" => ["\$_POST", "\$_FILES", "\$_UPLOAD", "\$_SERVER"],
            "answer" => "\$_FILES",
            "difficulty" => "Medium"
        ],
        [
            "id" => 47,
            "question" => "Which keyword is used to refer to a variable outside the current function scope?",
            "options" => ["extern", "global", "static", "outer"],
            "answer" => "global",
            "difficulty" => "Medium"
        ],
        [
            "id" => 48,
            "question" => "What is the purpose of the 'static' keyword in a function?",
            "options" => ["To prevent the function from being called", "To keep variable value between function calls", "To make it accessable from anywhere", "To speed up execution"],
            "answer" => "To keep variable value between function calls",
            "difficulty" => "Medium"
        ],
        [
            "id" => 49,
            "question" => "Which function checks if a file exists?",
            "options" => ["file_exists()", "is_file()", "check_file()", "exists()"],
            "answer" => "file_exists()",
            "difficulty" => "Medium"
        ],
        [
            "id" => 50,
            "question" => "How do you open a file for ONLY reading in PHP?",
            "options" => ["fopen('file.txt', 'w');", "fopen('file.txt', 'r');", "fopen('file.txt', 'a');", "open('file.txt');"],
            "answer" => "fopen('file.txt', 'r');",
            "difficulty" => "Medium"
        ],
        [
            "id" => 51,
            "question" => "What does the 'str_replace' function do?",
            "options" => ["Replaces occurances of a string", "Reverses a string", "Removes whitespace", "Counts characters"],
            "answer" => "Replaces occurances of a string",
            "difficulty" => "Medium"
        ],
        [
            "id" => 52,
            "question" => "Which function is used to redirect a user to a different page?",
            "options" => ["header()", "redirect()", "go()", "location()"],
            "answer" => "header()",
            "difficulty" => "Medium"
        ],
        [
            "id" => 53,
            "question" => "What happens if header('Location: ...') is called after outputting HTML?",
            "options" => ["It works normally", "It displays a warning and fails", "It works but is slow", "PHP crashes"],
            "answer" => "It displays a warning and fails",
            "difficulty" => "Medium"
        ],
        [
            "id" => 54,
            "question" => "Which character is used to separate statements in a 'for' loop?",
            "options" => [",", ";", ":", "|"],
            "answer" => ";",
            "difficulty" => "Medium"
        ],
        [
            "id" => 55,
            "question" => "How do you get the number of items in an associative array?",
            "options" => ["length()", "sizeof()", "count()", "Both count() and sizeof()"],
            "answer" => "Both count() and sizeof()",
            "difficulty" => "Medium"
        ],
        [
            "id" => 56,
            "question" => "What is the difference between '==' and '==='?",
            "options" => ["'===' checks only value", "'===' checks value and type", "There is no difference", "All are false"],
            "answer" => "'===' checks value and type",
            "difficulty" => "Medium"
        ],
        [
            "id" => 57,
            "question" => "Which function is used to sort an associative array in ascending order by VALUE?",
            "options" => ["asort()", "sort()", "ksort()", "arsort()"],
            "answer" => "asort()",
            "difficulty" => "Medium"
        ],
        [
            "id" => 58,
            "question" => "Which function is used to sort an associative array in ascending order by KEY?",
            "options" => ["asort()", "sort()", "ksort()", "krsort()"],
            "answer" => "ksort()",
            "difficulty" => "Medium"
        ],
        [
            "id" => 59,
            "question" => "What does the 'die()' function do?",
            "options" => ["Pauses the script", "Exits the script and outputs a message", "Restarts the server", "Deletes a variable"],
            "answer" => "Exits the script and outputs a message",
            "difficulty" => "Medium"
        ],
        [
            "id" => 60,
            "question" => "Which function is used to generate a random integer?",
            "options" => ["random()", "rand()", "gen()", "number()"],
            "answer" => "rand()",
            "difficulty" => "Medium"
        ],
        [
            "id" => 61,
            "question" => "What is \$_REQUEST composed of?",
            "options" => ["\$_GET and \$_POST", "\$_GET, \$_POST, and \$_COOKIE", "\$_SESSION and \$_POST", "\$_SERVER and \$_GET"],
            "answer" => "\$_GET, \$_POST, and \$_COOKIE",
            "difficulty" => "Medium"
        ],
        [
            "id" => 62,
            "question" => "How do you check if a file is readable?",
            "options" => ["is_readable()", "file_readable()", "can_read()", "check_read()"],
            "answer" => "is_readable()",
            "difficulty" => "Medium"
        ],
        [
            "id" => 63,
            "question" => "Which function converts a string to all UPPERCASE?",
            "options" => ["toupper()", "upper()", "strtoupper()", "case_upper()"],
            "answer" => "strtoupper()",
            "difficulty" => "Medium"
        ],
        [
            "id" => 64,
            "question" => "What is the purpose of the 'empty()' function?",
            "options" => ["Deletes a variable", "Checks if variable is set and 'empty' (0, '', null, false)", "Empties an array", "Clears the screen"],
            "answer" => "Checks if variable is set and 'empty' (0, '', null, false)",
            "difficulty" => "Medium"
        ],
        [
            "id" => 65,
            "question" => "Which escape character is used for a new line in a double-quoted string?",
            "options" => ["/n", "\\n", "/nl", "\\nl"],
            "answer" => "\\n",
            "difficulty" => "Medium"
        ],
        [
            "id" => 66,
            "question" => "What does '\$_SERVER['REQUEST_METHOD']' return?",
            "options" => ["The URL", "The protocol", "The method (GET/POST)", "The IP address"],
            "answer" => "The method (GET/POST)",
            "difficulty" => "Medium"
        ],
        [
            "id" => 67,
            "question" => "Which function is used to remove a file from the server?",
            "options" => ["remove()", "delete()", "unlink()", "rm()"],
            "answer" => "unlink()",
            "difficulty" => "Medium"
        ],

        // --- HARD (33) ---
        [
            "id" => 68,
            "question" => "What is the name of the magic method used as a constructor?",
            "options" => ["__construct()", "__init()", "__new()", "construct()"],
            "answer" => "__construct()",
            "difficulty" => "Hard"
        ],
        [
            "id" => 69,
            "question" => "Which keyword is used to prevent a class from being inherited?",
            "options" => ["static", "final", "private", "protected"],
            "answer" => "final",
            "difficulty" => "Hard"
        ],
        [
            "id" => 70,
            "question" => "What is an abstract class in PHP?",
            "options" => ["A class that cannot be instantiated", "A class with no methods", "A class with only static properties", "A public class"],
            "answer" => "A class that cannot be instantiated",
            "difficulty" => "Hard"
        ],
        [
            "id" => 71,
            "question" => "How do you access a static property or method from inside the same class?",
            "options" => ["\$this->", "self::", "static::", "Both self:: and static::"],
            "answer" => "Both self:: and static::",
            "difficulty" => "Hard"
        ],
        [
            "id" => 72,
            "question" => "What is a 'Trait' in PHP?",
            "options" => ["A type of array", "A mechanism for code reuse across different classes", "A special class variable", "A way to define constant arrays"],
            "answer" => "A mechanism for code reuse across different classes",
            "difficulty" => "Hard"
        ],
        [
            "id" => 73,
            "question" => "Which magic method is called when an object is used as a function?",
            "options" => ["__call()", "__invoke()", "__toFunction()", "__run()"],
            "answer" => "__invoke()",
            "difficulty" => "Hard"
        ],
        [
            "id" => 74,
            "question" => "What does PDO stand for in PHP?",
            "options" => ["PHP Data Objects", "PHP Database Option", "Pre-Database Object", "Packet Data Origin"],
            "answer" => "PHP Data Objects",
            "difficulty" => "Hard"
        ],
        [
            "id" => 75,
            "question" => "Which function is best for preventing SQL injection?",
            "options" => ["mysql_real_escape_string()", "htmlspecialchars()", "Using prepared statements with PDO/MySQLi", "strip_tags()"],
            "answer" => "Using prepared statements with PDO/MySQLi",
            "difficulty" => "Hard"
        ],
        [
            "id" => 76,
            "question" => "What is 'Late Static Binding'?",
            "options" => ["Binding variables at compile time", "Referencing the class called at runtime using static::", "A way to speed up class loading", "None of these"],
            "answer" => "Referencing the class called at runtime using static::",
            "difficulty" => "Hard"
        ],
        [
            "id" => 77,
            "question" => "What does the 'yield' keyword do in PHP?",
            "options" => ["Stops execution", "Defines a generator function", "Returns a value from a class", "Defines a trait"],
            "answer" => "Defines a generator function",
            "difficulty" => "Hard"
        ],
        [
            "id" => 78,
            "question" => "Which magic method is called when trying to access a non-existent property?",
            "options" => ["__set()", "__get()", "__call()", "__isset()"],
            "answer" => "__get()",
            "difficulty" => "Hard"
        ],
        [
            "id" => 79,
            "question" => "How do you define an anonymous function (closure)?",
            "options" => ["\$var = function() {};", "匿名 function() {};", "\$var = lambda();", "function \$var() {}"],
            "answer" => "\$var = function() {};",
            "difficulty" => "Hard"
        ],
        [
            "id" => 80,
            "question" => "What does the 'use' keyword do in a closure?",
            "options" => ["Imports a namespace", "Passes variables from parent scope into closure", "Defines a trait", "Inherits a class"],
            "answer" => "Passes variables from parent scope into closure",
            "difficulty" => "Hard"
        ],
        [
            "id" => 81,
            "question" => "What does 'null coalescing operator' (??) do?",
            "options" => ["Multiplies two values", "Returns first operand if it exists and is not null", "Checks if value is zero", "Concatenates strings"],
            "answer" => "Returns first operand if it exists and is not null",
            "difficulty" => "Hard"
        ],
        [
            "id" => 82,
            "question" => "What is the spaceship operator (<=>) used for?",
            "options" => ["Concatenation", "Combined comparison (-1, 0, or 1)", "Math operations", "Logical AND"],
            "answer" => "Combined comparison (-1, 0, or 1)",
            "difficulty" => "Hard"
        ],
        [
            "id" => 83,
            "question" => "Which keyword is used to catch a specific exception?",
            "options" => ["catch", "handle", "rescue", "trap"],
            "answer" => "catch",
            "difficulty" => "Hard"
        ],
        [
            "id" => 84,
            "question" => "What can follow a 'try' block?",
            "options" => ["Only catch", "Only finally", "Either catch or finally, or both", "Nothing"],
            "answer" => "Either catch or finally, or both",
            "difficulty" => "Hard"
        ],
        [
            "id" => 85,
            "question" => "How do you define a namespace in PHP?",
            "options" => ["namespace Name;", "use Name;", "pkg Name;", "module Name;"],
            "answer" => "namespace Name;",
            "difficulty" => "Hard"
        ],
        [
            "id" => 86,
            "question" => "What is an Interface in PHP?",
            "options" => ["A class with logic", "A contract specifying which methods a class must implement", "A graphical UI", "A database connection"],
            "answer" => "A contract specifying which methods a class must implement",
            "difficulty" => "Hard"
        ],
        [
            "id" => 87,
            "question" => "Which method is called when an object is cast to a string?",
            "options" => ["__cast()", "__toString()", "__print()", "__format()"],
            "answer" => "__toString()",
            "difficulty" => "Hard"
        ],
        [
            "id" => 88,
            "question" => "What is Reflection in PHP?",
            "options" => ["Mirroring a database", "Class/method discovery at runtime", "Reverse string function", "Garbage collection"],
            "answer" => "Class/method discovery at runtime",
            "difficulty" => "Hard"
        ],
        [
            "id" => 89,
            "question" => "Which function is used to securely register a custom autoloader?",
            "options" => ["__autoload()", "spl_autoload_register()", "register_autoloader()", "auto_load()"],
            "answer" => "spl_autoload_register()",
            "difficulty" => "Hard"
        ],
        [
            "id" => 90,
            "question" => "What does json_encode() return on success?",
            "options" => ["An array", "A JSON encoded string", "An object", "A boolean"],
            "answer" => "A JSON encoded string",
            "difficulty" => "Hard"
        ],
        [
            "id" => 91,
            "question" => "Which function is used to extract a slice of an array?",
            "options" => ["array_slice()", "array_splice()", "array_cut()", "array_part()"],
            "answer" => "array_slice()",
            "difficulty" => "Hard"
        ],
        [
            "id" => 92,
            "question" => "What is the result of 1 == '1' and 1 === '1'?",
            "options" => ["Both true", "Both false", "True, False", "False, True"],
            "answer" => "True, False",
            "difficulty" => "Hard"
        ],
        [
            "id" => 93,
            "question" => "Which function returns information about the variables passed to it in a readable format?",
            "options" => ["print_r()", "echo", "debug()", "show()"],
            "answer" => "print_r()",
            "difficulty" => "Hard"
        ],
        [
            "id" => 94,
            "question" => "What is the purpose of the 'finally' block?",
            "options" => ["To handle errors", "To exit the script", "To execute code after try/catch regardless of success", "To define final variables"],
            "answer" => "To execute code after try/catch regardless of success",
            "difficulty" => "Hard"
        ],
        [
            "id" => 95,
            "question" => "What does the 'instanceof' operator do?",
            "options" => ["Creates a new instance", "Checks if an object is an instance of a specific class", "Checks if a class exists", "Duplicates an object"],
            "answer" => "Checks if an object is an instance of a specific class",
            "difficulty" => "Hard"
        ],
        [
            "id" => 96,
            "question" => "Which function is used to set the internal pointer of an array to its first element?",
            "options" => ["start()", "first()", "reset()", "end()"],
            "answer" => "reset()",
            "difficulty" => "Hard"
        ],
        [
            "id" => 97,
            "question" => "What is the recommended function for hashing passwords securely?",
            "options" => ["md5()", "sha1()", "password_hash()", "crypt()"],
            "answer" => "password_hash()",
            "difficulty" => "Hard"
        ],
        [
            "id" => 98,
            "question" => "Which constant is used for the strongest hashing algorithm in password_hash()?",
            "options" => ["PASSWORD_BCRYPT", "PASSWORD_DEFAULT", "PASSWORD_MD5", "PASSWORD_SHA256"],
            "answer" => "PASSWORD_DEFAULT",
            "difficulty" => "Hard"
        ],
        [
            "id" => 99,
            "question" => "How do you check if a class property exists?",
            "options" => ["isset()", "property_exists()", "class_exists()", "has_property()"],
            "answer" => "property_exists()",
            "difficulty" => "Hard"
        ],
        [
            "id" => 100,
            "question" => "What is the purpose of 'serialize()'?",
            "options" => ["Encrypts data", "Converts a variable into a storable representation (string)", "Sorts data", "Splits data into multiple files"],
            "answer" => "Converts a variable into a storable representation (string)",
            "difficulty" => "Hard"
        ]
    ],

    'Database' => [
        [
            "id" => 101,
            "question" => "What SQL statement is used to create a new user in MariaDB/MySQL?",
            "options" => ["ADD USER", "CREATE USER", "INSERT USER", "NEW USER"],
            "answer" => "CREATE USER",
            "difficulty" => "Easy"
        ],
        [
            "id" => 102,
            "question" => "Which command is used to apply permission changes after granting privileges?",
            "options" => ["REFRESH PRIVILEGES", "UPDATE PRIVILEGES", "FLUSH PRIVILEGES", "RESET PRIVILEGES"],
            "answer" => "FLUSH PRIVILEGES",
            "difficulty" => "Easy"
        ],
        [
            "id" => 103,
            "question" => "What is a subquery in MySQL?",
            "options" => ["A query that runs after the main query", "A query nested inside another query", "A query that only uses aggregate functions", "A query that joins two tables"],
            "answer" => "A query nested inside another query",
            "difficulty" => "Easy"
        ],
        [
            "id" => 104,
            "question" => "What is a view in MySQL?",
            "options" => ["A physical copy of a table", "A virtual table based on a SELECT statement", "A backup of the database", "A type of index"],
            "answer" => "A virtual table based on a SELECT statement",
            "difficulty" => "Easy"
        ],
        [
            "id" => 105,
            "question" => "Which SQL statement is used to remove a view from the database?",
            "options" => ["DELETE VIEW", "REMOVE VIEW", "DROP VIEW", "ERASE VIEW"],
            "answer" => "DROP VIEW",
            "difficulty" => "Easy"
        ],
        [
            "id" => 106,
            "question" => "What does the COMMIT statement do in SQL?",
            "options" => ["Undoes all changes in the transaction", "Permanently saves all changes in the transaction", "Pauses the transaction", "Creates a savepoint"],
            "answer" => "Permanently saves all changes in the transaction",
            "difficulty" => "Easy"
        ],
        [
            "id" => 107,
            "question" => "Which SQL statement is used to revoke privileges from a user?",
            "options" => ["REMOVE", "DELETE", "REVOKE", "DENY"],
            "answer" => "REVOKE",
            "difficulty" => "Easy"
        ],
        [
            "id" => 108,
            "question" => "What does a subquery return if it uses the IN operator?",
            "options" => ["A single value", "Multiple rows", "A boolean value", "A single column only"],
            "answer" => "Multiple rows",
            "difficulty" => "Easy"
        ],
        [
            "id" => 109,
            "question" => "What does the asterisk (*) mean in 'GRANT ALL ON *.*'?",
            "options" => ["All users", "All databases and all tables", "All columns", "All privileges"],
            "answer" => "All databases and all tables",
            "difficulty" => "Easy"
        ],
        [
            "id" => 110,
            "question" => "Which aggregate function returns the number of rows?",
            "options" => ["SUM()", "COUNT()", "AVG()", "MAX()"],
            "answer" => "COUNT()",
            "difficulty" => "Easy"
        ],
        [
            "id" => 111,
            "question" => "Which aggregate function returns the highest value?",
            "options" => ["MAX()", "MIN()", "TOP()", "HIGHEST()"],
            "answer" => "MAX()",
            "difficulty" => "Easy"
        ],
        [
            "id" => 112,
            "question" => "A transaction must be either entirely completed or entirely aborted. This is called:",
            "options" => ["Consistency", "Isolation", "Atomicity", "Durability"],
            "answer" => "Atomicity",
            "difficulty" => "Easy"
        ],
        [
            "id" => 113,
            "question" => "What is the default MySQL command-line prompt after login?",
            "options" => ["mysql>", "mariadb>", "sql>", ">"],
            "answer" => "mysql>",
            "difficulty" => "Easy"
        ],
        [
            "id" => 114,
            "question" => "Which privilege allows a user to delete rows from a table?",
            "options" => ["DROP", "DELETE", "REMOVE", "ERASE"],
            "answer" => "DELETE",
            "difficulty" => "Easy"
        ],
        [
            "id" => 115,
            "question" => "Which privilege allows a user to insert rows into a table?",
            "options" => ["ADD", "INSERT", "CREATE", "UPDATE"],
            "answer" => "INSERT",
            "difficulty" => "Easy"
        ],
        [
            "id" => 116,
            "question" => "Which privilege allows a user to read data from a table?",
            "options" => ["READ", "SELECT", "VIEW", "SHOW"],
            "answer" => "SELECT",
            "difficulty" => "Easy"
        ],
        [
            "id" => 117,
            "question" => "What does 'localhost' mean in 'user1@localhost'?",
            "options" => ["The user can connect from any computer", "The user can only connect from the same server", "The user is a local administrator", "The user has no restrictions"],
            "answer" => "The user can only connect from the same server",
            "difficulty" => "Easy"
        ],
        [
            "id" => 118,
            "question" => "What is a database role?",
            "options" => ["A user's password", "A group of privileges", "A type of table", "A backup file"],
            "answer" => "A group of privileges",
            "difficulty" => "Easy"
        ],
        [
            "id" => 119,
            "question" => "Which statement is used to delete a user account?",
            "options" => ["DELETE USER", "REMOVE USER", "DROP USER", "ERASE USER"],
            "answer" => "DROP USER",
            "difficulty" => "Easy"
        ],
        [
            "id" => 120,
            "question" => "What does the ROLLBACK statement do?",
            "options" => ["Saves changes", "Undoes changes in the current transaction", "Creates a backup", "Commits changes"],
            "answer" => "Undoes changes in the current transaction",
            "difficulty" => "Easy"
        ],
        [
            "id" => 121,
            "question" => "A subquery must be enclosed in:",
            "options" => ["Square brackets []", "Curly braces {}", "Parentheses ()", "Angle brackets <>"],
            "answer" => "Parentheses ()",
            "difficulty" => "Easy"
        ],
        [
            "id" => 122,
            "question" => "Which clause is NOT allowed inside a subquery?",
            "options" => ["WHERE", "HAVING", "ORDER BY", "GROUP BY"],
            "answer" => "ORDER BY",
            "difficulty" => "Easy"
        ],
        [
            "id" => 123,
            "question" => "What is a consistent database state?",
            "options" => ["All tables have the same number of rows", "All data integrity constraints are satisfied", "No users are logged in", "The database is backed up"],
            "answer" => "All data integrity constraints are satisfied",
            "difficulty" => "Easy"
        ],
        [
            "id" => 124,
            "question" => "Which command shows privileges for a specific user?",
            "options" => ["SHOW PRIVILEGES", "DISPLAY GRANTS", "SHOW GRANTS", "LIST PRIVILEGES"],
            "answer" => "SHOW GRANTS",
            "difficulty" => "Easy"
        ],
        [
            "id" => 125,
            "question" => "What does the UPDATE privilege allow?",
            "options" => ["Delete rows", "Insert rows", "Modify existing rows", "Create tables"],
            "answer" => "Modify existing rows",
            "difficulty" => "Easy"
        ],
        [
            "id" => 126,
            "question" => "What does the DROP privilege allow?",
            "options" => ["Delete rows", "Delete tables or databases", "Drop user accounts", "Remove columns"],
            "answer" => "Delete tables or databases",
            "difficulty" => "Easy"
        ],
        [
            "id" => 127,
            "question" => "Which aggregate function returns the average value?",
            "options" => ["AVG()", "MEAN()", "MEDIAN()", "SUM()/COUNT()"],
            "answer" => "AVG()",
            "difficulty" => "Easy"
        ],
        [
            "id" => 128,
            "question" => "What does 'VIEW' help with regarding data access?",
            "options" => ["Speeding up queries", "Restricting data access", "Creating indexes", "Backing up data"],
            "answer" => "Restricting data access",
            "difficulty" => "Easy"
        ],
        [
            "id" => 129,
            "question" => "Which SQL keyword is used to create a view?",
            "options" => ["MAKE VIEW", "CREATE VIEW", "NEW VIEW", "DEFINE VIEW"],
            "answer" => "CREATE VIEW",
            "difficulty" => "Easy"
        ],
        [
            "id" => 130,
            "question" => "What does the 'ALL PRIVILEGES' keyword do?",
            "options" => ["Grants only SELECT", "Grants all permissions except GRANT OPTION", "Grants only INSERT", "Grants only DELETE"],
            "answer" => "Grants all permissions except GRANT OPTION",
            "difficulty" => "Easy"
        ],
        [
            "id" => 131,
            "question" => "What is the purpose of the transaction log?",
            "options" => ["To store user passwords", "To keep track of all transactions for recovery", "To backup the entire database", "To speed up queries"],
            "answer" => "To keep track of all transactions for recovery",
            "difficulty" => "Easy"
        ],
        [
            "id" => 132,
            "question" => "Which of the following is a single-row comparison operator?",
            "options" => ["IN", "ANY", "ALL", "="],
            "answer" => "=",
            "difficulty" => "Easy"
        ],
        [
            "id" => 133,
            "question" => "What does the CREATE privilege allow?",
            "options" => ["Insert data", "Create new tables or databases", "Delete tables", "Update data"],
            "answer" => "Create new tables or databases",
            "difficulty" => "Easy"
        ],
        [
            "id" => 134,
            "question" => "A view does NOT store data physically. This means it is a:",
            "options" => ["Physical table", "Virtual table", "Temporary table", "System table"],
            "answer" => "Virtual table",
            "difficulty" => "Easy"
        ],
        [
            "id" => 135,
            "question" => "What does the GRANT OPTION privilege allow?",
            "options" => ["Grant privileges to other users", "Execute functions", "Create views", "Backup the database"],
            "answer" => "Grant privileges to other users",
            "difficulty" => "Easy"
        ],
        [
            "id" => 136,
            "question" => "Which operator is used with a multiple-row subquery to compare a value with every value returned?",
            "options" => ["ALL", "ANY", "SOME", "IN"],
            "answer" => "ALL",
            "difficulty" => "Medium"
        ],
        [
            "id" => 137,
            "question" => "Which of the following is NOT a property of a database transaction (ACID)?",
            "options" => ["Atomicity", "Consistency", "Durability", "Reliability"],
            "answer" => "Reliability",
            "difficulty" => "Medium"
        ],
        [
            "id" => 138,
            "question" => "What is the main purpose of concurrency control?",
            "options" => ["To speed up query execution", "To coordinate simultaneous transactions and prevent data integrity problems", "To create backup copies of the database", "To encrypt sensitive data"],
            "answer" => "To coordinate simultaneous transactions and prevent data integrity problems",
            "difficulty" => "Medium"
        ],
        [
            "id" => 139,
            "question" => "Which privilege allows a user to grant or remove other users' privileges?",
            "options" => ["ALL PRIVILEGES", "SUPER", "GRANT OPTION", "ADMIN OPTION"],
            "answer" => "GRANT OPTION",
            "difficulty" => "Medium"
        ],
        [
            "id" => 140,
            "question" => "What is the problem called when two concurrent transactions update the same data and one update is lost?",
            "options" => ["Dirty read", "Lost update", "Phantom read", "Deadlock"],
            "answer" => "Lost update",
            "difficulty" => "Medium"
        ],
        [
            "id" => 141,
            "question" => "Which statement is true about views?",
            "options" => ["Views store data physically on disk", "Views can be created using JOINs and subqueries", "Views cannot be updated", "Views are slower than tables"],
            "answer" => "Views can be created using JOINs and subqueries",
            "difficulty" => "Medium"
        ],
        [
            "id" => 142,
            "question" => "What is a correlated subquery?",
            "options" => ["A subquery that runs independently", "A subquery that references columns from the outer query", "A subquery that uses aggregate functions", "A subquery that returns multiple rows"],
            "answer" => "A subquery that references columns from the outer query",
            "difficulty" => "Medium"
        ],
        [
            "id" => 143,
            "question" => "What does the 'CREATE OR REPLACE VIEW' statement do?",
            "options" => ["Creates a new view or replaces an existing one", "Creates a view and a table", "Only creates if not exists", "Replaces all views"],
            "answer" => "Creates a new view or replaces an existing one",
            "difficulty" => "Medium"
        ],
        [
            "id" => 144,
            "question" => "Which of the following is a multiple-row comparison operator?",
            "options" => ["=", "<>", ">", "IN"],
            "answer" => "IN",
            "difficulty" => "Medium"
        ],
        [
            "id" => 145,
            "question" => "What does the isolation property ensure?",
            "options" => ["Transactions are atomic", "Data used by one transaction cannot be used by another until the first is completed", "Changes are permanent", "Database remains consistent"],
            "answer" => "Data used by one transaction cannot be used by another until the first is completed",
            "difficulty" => "Medium"
        ],
        [
            "id" => 146,
            "question" => "What does durability ensure?",
            "options" => ["Transactions are atomic", "Data is isolated", "Committed changes cannot be lost", "Database remains consistent"],
            "answer" => "Committed changes cannot be lost",
            "difficulty" => "Medium"
        ],
        [
            "id" => 147,
            "question" => "What is a lock in database concurrency control?",
            "options" => ["A password for a table", "Exclusive use of a data item to a current transaction", "A backup mechanism", "A type of index"],
            "answer" => "Exclusive use of a data item to a current transaction",
            "difficulty" => "Medium"
        ],
        [
            "id" => 148,
            "question" => "What does the scheduler do in a DBMS?",
            "options" => ["Backs up the database", "Establishes the order of operations in concurrent transactions", "Creates user accounts", "Optimizes queries"],
            "answer" => "Establishes the order of operations in concurrent transactions",
            "difficulty" => "Medium"
        ],
        [
            "id" => 149,
            "question" => "Which privilege allows a user to execute stored procedures?",
            "options" => ["RUN", "EXECUTE", "CALL", "PROCEDURE"],
            "answer" => "EXECUTE",
            "difficulty" => "Medium"
        ],
        [
            "id" => 150,
            "question" => "What is a multiple-column subquery?",
            "options" => ["A subquery that returns multiple rows", "A subquery that returns two or more columns", "A subquery inside another subquery", "A subquery with multiple WHERE conditions"],
            "answer" => "A subquery that returns two or more columns",
            "difficulty" => "Medium"
        ],
        [
            "id" => 151,
            "question" => "What happens when you use 'GRANT SELECT ON *.*'?",
            "options" => ["Grant SELECT on all tables of one database", "Grant SELECT on all databases and tables", "Grant SELECT on all columns", "Grant SELECT on all users"],
            "answer" => "Grant SELECT on all databases and tables",
            "difficulty" => "Medium"
        ],
        [
            "id" => 152,
            "question" => "What is the difference between DROP and DELETE privileges?",
            "options" => ["DROP deletes tables, DELETE deletes rows", "DROP deletes rows, DELETE deletes tables", "They are the same", "DROP works on columns, DELETE on rows"],
            "answer" => "DROP deletes tables, DELETE deletes rows",
            "difficulty" => "Medium"
        ],
        [
            "id" => 153,
            "question" => "What does 'REVOKE ALL ON websites FROM user1' do?",
            "options" => ["Revokes all permissions including GRANT OPTION", "Revokes all permissions except GRANT OPTION", "Deletes the websites table", "Drops the user"],
            "answer" => "Revokes all permissions except GRANT OPTION",
            "difficulty" => "Medium"
        ],
        [
            "id" => 154,
            "question" => "Which statement correctly grants SELECT on a specific database?",
            "options" => ["GRANT SELECT ON database.* TO user", "GRANT SELECT ON *.* TO user", "GRANT SELECT TO user ON database", "GRANT SELECT ON database TO user"],
            "answer" => "GRANT SELECT ON database.* TO user",
            "difficulty" => "Medium"
        ],
        [
            "id" => 155,
            "question" => "What is the purpose of 'OR REPLACE' in CREATE VIEW?",
            "options" => ["Creates a backup of the view", "Replaces an existing view with the same name", "Creates multiple views", "Only creates if view exists"],
            "answer" => "Replaces an existing view with the same name",
            "difficulty" => "Medium"
        ],
        [
            "id" => 156,
            "question" => "A view can be created using:",
            "options" => ["Only one table", "Multiple tables with JOIN", "Only SELECT statements without conditions", "Only system tables"],
            "answer" => "Multiple tables with JOIN",
            "difficulty" => "Medium"
        ],
        [
            "id" => 157,
            "question" => "What does 'GRANT EXECUTE ON FUNCTION CalcIncome TO user' do?",
            "options" => ["Grants permission to modify the function", "Grants permission to execute the function", "Grants permission to delete the function", "Grants permission to view the function code"],
            "answer" => "Grants permission to execute the function",
            "difficulty" => "Medium"
        ],
        [
            "id" => 158,
            "question" => "What is an inconsistent retrieval?",
            "options" => ["When a transaction reads data before and after another transaction modifies it", "When two transactions update the same data", "When a transaction reads uncommitted data", "When a transaction fails"],
            "answer" => "When a transaction reads data before and after another transaction modifies it",
            "difficulty" => "Medium"
        ],
        [
            "id" => 159,
            "question" => "Which of the following is a valid reason to use views?",
            "options" => ["To store data permanently", "To hide data complexity", "To replace all tables", "To speed up all queries"],
            "answer" => "To hide data complexity",
            "difficulty" => "Medium"
        ],
        [
            "id" => 160,
            "question" => "What does the IF EXISTS clause do in DROP VIEW?",
            "options" => ["Drops the view only if it has data", "Prevents an error if the view does not exist", "Creates the view if it exists", "Drops all views"],
            "answer" => "Prevents an error if the view does not exist",
            "difficulty" => "Medium"
        ],
        [
            "id" => 161,
            "question" => "What does serializability ensure?",
            "options" => ["Transactions run one after another", "Concurrent execution yields consistent results", "Transactions are atomic", "Data is durable"],
            "answer" => "Concurrent execution yields consistent results",
            "difficulty" => "Medium"
        ],
        [
            "id" => 162,
            "question" => "What is the difference between 'ANY' and 'ALL' in subqueries?",
            "options" => ["ANY compares with at least one, ALL compares with every value", "ANY compares with every, ALL compares with at least one", "They are identical", "ANY works only with numbers"],
            "answer" => "ANY compares with at least one, ALL compares with every value",
            "difficulty" => "Medium"
        ],
        [
            "id" => 163,
            "question" => "What does 'GRANT SELECT, INSERT ON db.table TO user@localhost' allow?",
            "options" => ["Only SELECT", "SELECT and INSERT", "Only INSERT", "All privileges"],
            "answer" => "SELECT and INSERT",
            "difficulty" => "Medium"
        ],
        [
            "id" => 164,
            "question" => "Which privilege is required to create a view?",
            "options" => ["SELECT on the underlying tables", "CREATE VIEW privilege", "Both SELECT and CREATE VIEW", "ALL PRIVILEGES"],
            "answer" => "Both SELECT and CREATE VIEW",
            "difficulty" => "Medium"
        ],
        [
            "id" => 165,
            "question" => "What happens when you ROLLBACK after a COMMIT?",
            "options" => ["Rolls back all changes", "Nothing, COMMIT is permanent", "Rolls back only the last statement", "Creates a savepoint"],
            "answer" => "Nothing, COMMIT is permanent",
            "difficulty" => "Medium"
        ],
        [
            "id" => 166,
            "question" => "What is a single-row subquery?",
            "options" => ["A subquery that returns one row", "A subquery that returns one column", "A subquery with one condition", "A subquery inside a single row"],
            "answer" => "A subquery that returns one row",
            "difficulty" => "Medium"
        ],
        [
            "id" => 167,
            "question" => "What does the following do: 'SHOW GRANTS FOR user1@localhost'?",
            "options" => ["Shows all users", "Shows privileges for user1", "Shows tables owned by user1", "Shows databases accessible by user1"],
            "answer" => "Shows privileges for user1",
            "difficulty" => "Medium"
        ],
        [
            "id" => 168,
            "question" => "What is the phenomenon called when a transaction reads uncommitted data that is later rolled back?",
            "options" => ["Lost update", "Dirty read (uncommitted data)", "Inconsistent retrieval", "Serializable read"],
            "answer" => "Dirty read (uncommitted data)",
            "difficulty" => "Hard"
        ],
        [
            "id" => 169,
            "question" => "What is the difference between a view and a table?",
            "options" => ["Views store data, tables do not", "Tables store data physically, views are virtual", "Views can have indexes, tables cannot", "Tables cannot be updated, views can"],
            "answer" => "Tables store data physically, views are virtual",
            "difficulty" => "Hard"
        ],
        [
            "id" => 170,
            "question" => "What is a deadlock in database concurrency control?",
            "options" => ["Two transactions waiting for each other to release locks", "A transaction that never commits", "A lost update situation", "A dirty read situation"],
            "answer" => "Two transactions waiting for each other to release locks",
            "difficulty" => "Hard"
        ],
        [
            "id" => 171,
            "question" => "What is the phantom read problem?",
            "options" => ["Reading uncommitted data", "New rows appearing during a transaction", "Updating the same data twice", "Losing an update"],
            "answer" => "New rows appearing during a transaction",
            "difficulty" => "Hard"
        ],
        [
            "id" => 172,
            "question" => "What is the difference between a subquery and a JOIN?",
            "options" => ["Subqueries are always faster", "JOINs combine tables horizontally, subqueries nest queries", "Subqueries cannot use WHERE", "JOINs cannot use aggregate functions"],
            "answer" => "JOINs combine tables horizontally, subqueries nest queries",
            "difficulty" => "Hard"
        ],
        [
            "id" => 173,
            "question" => "What is the purpose of 'WITH CHECK OPTION' in a view?",
            "options" => ["Prevents updates that would exclude rows from the view", "Checks user permissions", "Validates data types", "Creates a read-only view"],
            "answer" => "Prevents updates that would exclude rows from the view",
            "difficulty" => "Hard"
        ],
        [
            "id" => 174,
            "question" => "What is the difference between 'GRANT' and 'REVOKE'?",
            "options" => ["GRANT gives privileges, REVOKE removes them", "GRANT removes, REVOKE gives", "Both give privileges", "Both remove privileges"],
            "answer" => "GRANT gives privileges, REVOKE removes them",
            "difficulty" => "Hard"
        ],
        [
            "id" => 175,
            "question" => "What happens when you update data through a view?",
            "options" => ["Always updates the underlying table", "Updates only the view", "Updates a copy of the data", "Not possible"],
            "answer" => "Always updates the underlying table",
            "difficulty" => "Hard"
        ],
        [
            "id" => 176,
            "question" => "What is the difference between a correlated and non-correlated subquery?",
            "options" => ["Correlated runs once, non-correlated runs per row", "Non-correlated runs once, correlated runs per row", "Both run once", "Both run per row"],
            "answer" => "Non-correlated runs once, correlated runs per row",
            "difficulty" => "Hard"
        ],
        [
            "id" => 177,
            "question" => "What is the two-phase locking protocol?",
            "options" => ["Locks are acquired and released in two phases", "Transactions run in two phases", "Locks are never released", "Only one lock per transaction"],
            "answer" => "Locks are acquired and released in two phases",
            "difficulty" => "Hard"
        ],
        [
            "id" => 178,
            "question" => "What is the difference between optimistic and pessimistic locking?",
            "options" => ["Optimistic assumes no conflict, pessimistic assumes conflicts", "Pessimistic assumes no conflict, optimistic assumes conflicts", "Both assume conflicts", "Neither assumes conflicts"],
            "answer" => "Optimistic assumes no conflict, pessimistic assumes conflicts",
            "difficulty" => "Hard"
        ],
        [
            "id" => 179,
            "question" => "What is a non-repeatable read?",
            "options" => ["Reading uncommitted data", "Same row returns different values in the same transaction", "New rows appearing", "Lost updates"],
            "answer" => "Same row returns different values in the same transaction",
            "difficulty" => "Hard"
        ],
        [
            "id" => 180,
            "question" => "What is the transaction isolation level that prevents dirty reads, non-repeatable reads, and phantom reads?",
            "options" => ["READ UNCOMMITTED", "READ COMMITTED", "REPEATABLE READ", "SERIALIZABLE"],
            "answer" => "SERIALIZABLE",
            "difficulty" => "Hard"
        ],
        [
            "id" => 181,
            "question" => "What does 'REVOKE SELECT ON *.* FROM user@'%' ' do?",
            "options" => ["Revokes SELECT from all hosts", "Revokes SELECT only from localhost", "Revokes all privileges", "Deletes the user"],
            "answer" => "Revokes SELECT from all hosts",
            "difficulty" => "Hard"
        ],
        [
            "id" => 182,
            "question" => "What is the difference between 'DROP USER' and 'DELETE FROM mysql.user'?",
            "options" => ["DROP USER is safer and removes privileges automatically", "DELETE FROM mysql.user is the same", "DROP USER only works on localhost", "DELETE FROM mysql.user requires FLUSH PRIVILEGES"],
            "answer" => "DROP USER is safer and removes privileges automatically",
            "difficulty" => "Hard"
        ],
        [
            "id" => 183,
            "question" => "What is a materialized view?",
            "options" => ["A view that stores data physically", "A view that is never updated", "A temporary view", "A system view"],
            "answer" => "A view that stores data physically",
            "difficulty" => "Hard"
        ],
        [
            "id" => 184,
            "question" => "What is the difference between 'WHERE' and 'HAVING' in subqueries?",
            "options" => ["WHERE filters rows, HAVING filters groups", "HAVING filters rows, WHERE filters groups", "Both filter rows", "Both filter groups"],
            "answer" => "WHERE filters rows, HAVING filters groups",
            "difficulty" => "Hard"
        ],
        [
            "id" => 185,
            "question" => "What is an EXISTS subquery?",
            "options" => ["Returns data if the subquery returns any rows", "Returns all rows", "Returns only NULL", "Returns only numbers"],
            "answer" => "Returns data if the subquery returns any rows",
            "difficulty" => "Hard"
        ],
        [
            "id" => 186,
            "question" => "What is a savepoint in transaction management?",
            "options" => ["An intermediate point to roll back to", "The end of a transaction", "The beginning of a transaction", "A type of lock"],
            "answer" => "An intermediate point to roll back to",
            "difficulty" => "Hard"
        ],
        [
            "id" => 187,
            "question" => "What is the difference between 'COMMIT' and 'ROLLBACK'?",
            "options" => ["COMMIT saves, ROLLBACK undoes", "COMMIT undoes, ROLLBACK saves", "Both save changes", "Both undo changes"],
            "answer" => "COMMIT saves, ROLLBACK undoes",
            "difficulty" => "Hard"
        ],
        [
            "id" => 188,
            "question" => "What does the following query do: 'SELECT name FROM students WHERE student_id IN (SELECT student_id FROM grades WHERE grade > 90)'?",
            "options" => ["Finds students with grades above 90", "Finds all students", "Finds students with grades below 90", "Finds students with no grades"],
            "answer" => "Finds students with grades above 90",
            "difficulty" => "Hard"
        ],
        [
            "id" => 189,
            "question" => "What is the difference between a clustered and non-clustered index on a view?",
            "options" => ["Clustered determines physical order", "Non-clustered determines physical order", "Both determine physical order", "Neither affects order"],
            "answer" => "Clustered determines physical order",
            "difficulty" => "Hard"
        ],
        [
            "id" => 190,
            "question" => "What is a schema-bound view?",
            "options" => ["A view tied to underlying table schemas", "A view with no schema", "A temporary view", "A system view"],
            "answer" => "A view tied to underlying table schemas",
            "difficulty" => "Hard"
        ],
        [
            "id" => 191,
            "question" => "What is the difference between 'IN' and 'EXISTS' in subqueries?",
            "options" => ["IN works with lists, EXISTS checks for existence", "EXISTS works with lists, IN checks for existence", "They are identical", "IN is faster than EXISTS"],
            "answer" => "IN works with lists, EXISTS checks for existence",
            "difficulty" => "Hard"
        ],
        [
            "id" => 192,
            "question" => "What is the purpose of the transaction log's 'before' and 'after' values?",
            "options" => ["To enable undo and redo operations", "To speed up queries", "To store user data", "To create backups"],
            "answer" => "To enable undo and redo operations",
            "difficulty" => "Hard"
        ],
        [
            "id" => 193,
            "question" => "What is a shared lock vs. an exclusive lock?",
            "options" => ["Shared allows reads, exclusive allows writes", "Shared allows writes, exclusive allows reads", "Both allow reads", "Both allow writes"],
            "answer" => "Shared allows reads, exclusive allows writes",
            "difficulty" => "Hard"
        ],
        [
            "id" => 194,
            "question" => "What is the difference between 'WITH GRANT OPTION' and 'GRANT OPTION'?",
            "options" => ["They are the same", "WITH GRANT OPTION is for roles", "GRANT OPTION is for tables", "WITH GRANT OPTION is deprecated"],
            "answer" => "They are the same",
            "difficulty" => "Hard"
        ],
        [
            "id" => 195,
            "question" => "What is a recursive view?",
            "options" => ["A view that references itself", "A view that never ends", "A system view", "A temporary view"],
            "answer" => "A view that references itself",
            "difficulty" => "Hard"
        ],
        [
            "id" => 196,
            "question" => "What is the difference between 'CASCADE' and 'RESTRICT' when dropping a user?",
            "options" => ["CASCADE drops dependent objects, RESTRICT prevents if dependencies exist", "RESTRICT drops dependencies, CASCADE prevents", "Both drop dependencies", "Neither affects dependencies"],
            "answer" => "CASCADE drops dependent objects, RESTRICT prevents if dependencies exist",
            "difficulty" => "Hard"
        ],
        [
            "id" => 197,
            "question" => "What is the purpose of 'IDENTIFIED BY' in CREATE USER?",
            "options" => ["Sets the user's password", "Identifies the user's host", "Sets the user's role", "Identifies the database"],
            "answer" => "Sets the user's password",
            "difficulty" => "Hard"
        ],
        [
            "id" => 198,
            "question" => "What is the difference between a derived table and a subquery?",
            "options" => ["Derived tables are used in FROM clause", "Subqueries are used in FROM clause", "They are the same", "Derived tables cannot use aggregates"],
            "answer" => "Derived tables are used in FROM clause",
            "difficulty" => "Hard"
        ],
        [
            "id" => 199,
            "question" => "What is a repeatable read isolation level?",
            "options" => ["Prevents dirty reads and non-repeatable reads", "Prevents only dirty reads", "Prevents phantom reads only", "Allows all anomalies"],
            "answer" => "Prevents dirty reads and non-repeatable reads",
            "difficulty" => "Hard"
        ],
        [
            "id" => 200,
            "question" => "What is the difference between 'FLUSH PRIVILEGES' and restarting MySQL?",
            "options" => ["FLUSH PRIVILEGES reloads grants without restart", "Restarting is faster", "FLUSH PRIVILEGES is for tables only", "They are identical"],
            "answer" => "FLUSH PRIVILEGES reloads grants without restart",
            "difficulty" => "Hard"
        ]
    ],

    'HTML_CSS' => [
        // ==================== EASY (34 Questions) ====================
        [
            "id" => 201,
            "question" => "What does HTML stand for?",
            "options" => [
                "Hyper Text Markup Language",
                "High Tech Modern Language",
                "Hyper Transfer Markup Language",
                "Home Tool Markup Language"
            ],
            "answer" => "Hyper Text Markup Language",
            "difficulty" => "Easy"
        ],
        [
            "id" => 202,
            "question" => "Which tag is used to define a hyperlink in HTML?",
            "options" => [
                "<link>",
                "<a>",
                "<href>",
                "<url>"
            ],
            "answer" => "<a>",
            "difficulty" => "Easy"
        ],
        [
            "id" => 203,
            "question" => "What does CSS stand for?",
            "options" => [
                "Creative Style Sheets",
                "Computer Style Sheets",
                "Cascading Style Sheets",
                "Colorful Style Sheets"
            ],
            "answer" => "Cascading Style Sheets",
            "difficulty" => "Easy"
        ],
        [
            "id" => 204,
            "question" => "Which HTML tag is used to define a table?",
            "options" => [
                "<table>",
                "<tr>",
                "<td>",
                "<th>"
            ],
            "answer" => "<table>",
            "difficulty" => "Easy"
        ],
        [
            "id" => 205,
            "question" => "What does W3C stand for?",
            "options" => [
                "World Wide Web Consortium",
                "Web World Wide Committee",
                "World Web Wide Consortium",
                "Web Wide World Corporation"
            ],
            "answer" => "World Wide Web Consortium",
            "difficulty" => "Easy"
        ],
        [
            "id" => 206,
            "question" => "Who invented the World Wide Web?",
            "options" => [
                "Bill Gates",
                "Steve Jobs",
                "Tim Berners-Lee",
                "Mark Zuckerberg"
            ],
            "answer" => "Tim Berners-Lee",
            "difficulty" => "Easy"
        ],
        [
            "id" => 207,
            "question" => "Which HTML tag is used for an unordered list?",
            "options" => [
                "<ol>",
                "<ul>",
                "<li>",
                "<list>"
            ],
            "answer" => "<ul>",
            "difficulty" => "Easy"
        ],
        [
            "id" => 208,
            "question" => "Which attribute specifies the destination of a hyperlink?",
            "options" => [
                "src",
                "href",
                "link",
                "url"
            ],
            "answer" => "href",
            "difficulty" => "Easy"
        ],
        [
            "id" => 209,
            "question" => "What is the correct HTML element for inserting a line break?",
            "options" => [
                "<break>",
                "<lb>",
                "<br>",
                "<hr>"
            ],
            "answer" => "<br>",
            "difficulty" => "Easy"
        ],
        [
            "id" => 210,
            "question" => "Which tag defines a table row in HTML?",
            "options" => [
                "<td>",
                "<tr>",
                "<th>",
                "<row>"
            ],
            "answer" => "<tr>",
            "difficulty" => "Easy"
        ],
        [
            "id" => 211,
            "question" => "Which tag defines a table header cell?",
            "options" => [
                "<td>",
                "<tr>",
                "<th>",
                "<header>"
            ],
            "answer" => "<th>",
            "difficulty" => "Easy"
        ],
        [
            "id" => 212,
            "question" => "What is the correct CSS syntax for setting the text color of a paragraph?",
            "options" => [
                "p {color: blue;}",
                "p {text-color: blue;}",
                "p:blue {color: blue;}",
                "p.color = blue"
            ],
            "answer" => "p {color: blue;}",
            "difficulty" => "Easy"
        ],
        [
            "id" => 213,
            "question" => "Which HTML tag is used to define an image?",
            "options" => [
                "<img>",
                "<td>",
                "<src>",
                "<pic>"
            ],
            "answer" => "<img>",
            "difficulty" => "Easy"
        ],
        [
            "id" => 214,
            "question" => "What does HTTP stand for?",
            "options" => [
                "HyperText Transfer Protocol",
                "High Transfer Text Protocol",
                "Hyper Transfer Text Protocol",
                "HighText Transfer Protocol"
            ],
            "answer" => "HyperText Transfer Protocol",
            "difficulty" => "Easy"
        ],
        [
            "id" => 215,
            "question" => "Which tag defines the main body of an HTML document?",
            "options" => [
                "<head>",
                "<body>",
                "<html>",
                "<main>"
            ],
            "answer" => "<body>",
            "difficulty" => "Easy"
        ],
        [
            "id" => 216,
            "question" => "Which of the following is a front-end programming language?",
            "options" => [
                "PHP",
                "Python",
                "JavaScript",
                "SQL"
            ],
            "answer" => "JavaScript",
            "difficulty" => "Easy"
        ],
        [
            "id" => 217,
            "question" => "What is the correct HTML for creating a text input field?",
            "options" => [
                "<input type=\"text\">",
                "<textfield>",
                "<input type=\"textarea\">",
                "<text>"
            ],
            "answer" => "<input type=\"text\">",
            "difficulty" => "Easy"
        ],
        [
            "id" => 218,
            "question" => "Which tag defines a paragraph in HTML?",
            "options" => [
                "<para>",
                "<p>",
                "<pg>",
                "<paragraph>"
            ],
            "answer" => "<p>",
            "difficulty" => "Easy"
        ],
        [
            "id" => 219,
            "question" => "What is the purpose of the alt attribute in an image tag?",
            "options" => [
                "To specify image size",
                "To provide alternative text for accessibility",
                "To link the image",
                "To style the image"
            ],
            "answer" => "To provide alternative text for accessibility",
            "difficulty" => "Easy"
        ],
        [
            "id" => 220,
            "question" => "Which tag defines the most important heading in HTML?",
            "options" => [
                "<h1>",
                "<h6>",
                "<heading>",
                "<head>"
            ],
            "answer" => "<h1>",
            "difficulty" => "Easy"
        ],
        [
            "id" => 221,
            "question" => "What does URL stand for?",
            "options" => [
                "Uniform Resource Locator",
                "Universal Resource Link",
                "Uniform Reference Link",
                "Universal Reference Locator"
            ],
            "answer" => "Uniform Resource Locator",
            "difficulty" => "Easy"
        ],
        [
            "id" => 222,
            "question" => "Which CSS property changes the background color of an element?",
            "options" => [
                "color",
                "bgcolor",
                "background-color",
                "background"
            ],
            "answer" => "background-color",
            "difficulty" => "Easy"
        ],
        [
            "id" => 223,
            "question" => "What is the correct HTML for a checkbox?",
            "options" => [
                "<input type=\"check\">",
                "<checkbox>",
                "<input type=\"checkbox\">",
                "<check>"
            ],
            "answer" => "<input type=\"checkbox\">",
            "difficulty" => "Easy"
        ],
        [
            "id" => 224,
            "question" => "Which tag is used to create a submit button in a form?",
            "options" => [
                "<input type=\"submit\">",
                "<button type=\"submit\">",
                "Both A and B",
                "<submit>"
            ],
            "answer" => "Both A and B",
            "difficulty" => "Easy"
        ],
        [
            "id" => 225,
            "question" => "Which of the following is a code editor mentioned in the course?",
            "options" => [
                "Microsoft Word",
                "Visual Studio Code",
                "Adobe Photoshop",
                "Excel"
            ],
            "answer" => "Visual Studio Code",
            "difficulty" => "Easy"
        ],
        [
            "id" => 226,
            "question" => "What does the <form> element do in HTML?",
            "options" => [
                "Creates a table",
                "Creates a container for user input",
                "Creates a heading",
                "Creates a list"
            ],
            "answer" => "Creates a container for user input",
            "difficulty" => "Easy"
        ],
        [
            "id" => 227,
            "question" => "Which attribute tells where to send form data?",
            "options" => [
                "method",
                "action",
                "target",
                "send"
            ],
            "answer" => "action",
            "difficulty" => "Easy"
        ],
        [
            "id" => 228,
            "question" => "What does the method=\"post\" do in a form?",
            "options" => [
                "Sends form data in the URL",
                "Sends form data in the request body",
                "Clears the form",
                "Validates the form"
            ],
            "answer" => "Sends form data in the request body",
            "difficulty" => "Easy"
        ],
        [
            "id" => 229,
            "question" => "Which HTML element is used to define a radio button?",
            "options" => [
                "<input type=\"radio\">",
                "<radio>",
                "<input type=\"option\">",
                "<option>"
            ],
            "answer" => "<input type=\"radio\">",
            "difficulty" => "Easy"
        ],
        [
            "id" => 230,
            "question" => "What does the <caption> tag do in an HTML table?",
            "options" => [
                "Adds a header row",
                "Adds a title/caption to the table",
                "Adds a footer",
                "Adds a border"
            ],
            "answer" => "Adds a title/caption to the table",
            "difficulty" => "Easy"
        ],
        [
            "id" => 231,
            "question" => "Which CSS property changes the font of an element?",
            "options" => [
                "font-style",
                "font-family",
                "text-font",
                "typeface"
            ],
            "answer" => "font-family",
            "difficulty" => "Easy"
        ],
        [
            "id" => 232,
            "question" => "What is the default color of an unvisited link in HTML?",
            "options" => [
                "Red",
                "Purple",
                "Blue",
                "Green"
            ],
            "answer" => "Blue",
            "difficulty" => "Easy"
        ],
        [
            "id" => 233,
            "question" => "What does the <thead> tag represent in a table?",
            "options" => [
                "Table body",
                "Table footer",
                "Table header group",
                "Table caption"
            ],
            "answer" => "Table header group",
            "difficulty" => "Easy"
        ],
        [
            "id" => 234,
            "question" => "Which tag is used to add a border to a table in CSS?",
            "options" => [
                "border-style",
                "border",
                "table-border",
                "outline"
            ],
            "answer" => "border",
            "difficulty" => "Easy"
        ],

        // ==================== MEDIUM (33 Questions) ====================
        [
            "id" => 235,
            "question" => "What does the colspan attribute do in an HTML table?",
            "options" => [
                "Merges cells horizontally across multiple columns",
                "Merges cells vertically across multiple rows",
                "Adds a column",
                "Deletes a column"
            ],
            "answer" => "Merges cells horizontally across multiple columns",
            "difficulty" => "Medium"
        ],
        [
            "id" => 236,
            "question" => "What is the difference between inline and block elements?",
            "options" => [
                "Inline elements take full width, block elements take only needed width",
                "Block elements take full width, inline elements take only needed width",
                "Both take full width",
                "Both take only needed width"
            ],
            "answer" => "Block elements take full width, inline elements take only needed width",
            "difficulty" => "Medium"
        ],
        [
            "id" => 237,
            "question" => "What is the F-shaped pattern in web design?",
            "options" => [
                "A pattern where users scan in an 'F' shape (top and left areas first)",
                "A pattern for arranging images",
                "A color scheme",
                "A type of font"
            ],
            "answer" => "A pattern where users scan in an 'F' shape (top and left areas first)",
            "difficulty" => "Medium"
        ],
        [
            "id" => 238,
            "question" => "What is visual hierarchy in web design?",
            "options" => [
                "Arranging elements in order of importance",
                "A type of CSS grid",
                "A color palette",
                "A navigation system"
            ],
            "answer" => "Arranging elements in order of importance",
            "difficulty" => "Medium"
        ],
        [
            "id" => 239,
            "question" => "What is the recommended maximum number of colors in a website color palette?",
            "options" => [
                "3",
                "5",
                "7",
                "10"
            ],
            "answer" => "5",
            "difficulty" => "Medium"
        ],
        [
            "id" => 240,
            "question" => "What is responsive web design?",
            "options" => [
                "A design that responds to user clicks",
                "A website that adjusts to different screen sizes",
                "A website with animations",
                "A design that changes color"
            ],
            "answer" => "A website that adjusts to different screen sizes",
            "difficulty" => "Medium"
        ],
        [
            "id" => 241,
            "question" => "What is the difference between a static and dynamic website?",
            "options" => [
                "Static has fixed content, dynamic content can change",
                "Static changes, dynamic is fixed",
                "Both are the same",
                "Static uses JavaScript, dynamic does not"
            ],
            "answer" => "Static has fixed content, dynamic content can change",
            "difficulty" => "Medium"
        ],
        [
            "id" => 242,
            "question" => "What is an absolute URL?",
            "options" => [
                "A full web address including protocol and domain",
                "A path relative to the current page",
                "A link to the same page",
                "A link to an email address"
            ],
            "answer" => "A full web address including protocol and domain",
            "difficulty" => "Medium"
        ],
        [
            "id" => 243,
            "question" => "What is a relative URL?",
            "options" => [
                "A full web address",
                "A path relative to the current page",
                "A link to an external site",
                "A link that opens in a new tab"
            ],
            "answer" => "A path relative to the current page",
            "difficulty" => "Medium"
        ],
        [
            "id" => 244,
            "question" => "What does HTTP status code 200 mean?",
            "options" => [
                "Page not found",
                "OK - Request successful",
                "Internal server error",
                "Access denied"
            ],
            "answer" => "OK - Request successful",
            "difficulty" => "Medium"
        ],
        [
            "id" => 245,
            "question" => "What does HTTP status code 404 mean?",
            "options" => [
                "OK",
                "Page not found",
                "Internal server error",
                "Unauthorized"
            ],
            "answer" => "Page not found",
            "difficulty" => "Medium"
        ],
        [
            "id" => 246,
            "question" => "What is the difference between front-end and back-end development?",
            "options" => [
                "Front-end is user-facing, back-end is server-side",
                "Front-end is server-side, back-end is user-facing",
                "Both are the same",
                "Front-end uses databases, back-end uses HTML"
            ],
            "answer" => "Front-end is user-facing, back-end is server-side",
            "difficulty" => "Medium"
        ],
        [
            "id" => 247,
            "question" => "What is the purpose of the mailto: attribute in a hyperlink?",
            "options" => [
                "To send an email",
                "To open the user's email program",
                "To create a mail server",
                "To validate an email address"
            ],
            "answer" => "To open the user's email program",
            "difficulty" => "Medium"
        ],
        [
            "id" => 248,
            "question" => "Which CSS property creates space inside an element, between content and border?",
            "options" => [
                "margin",
                "padding",
                "spacing",
                "border-spacing"
            ],
            "answer" => "padding",
            "difficulty" => "Medium"
        ],
        [
            "id" => 249,
            "question" => "Which CSS property creates space outside an element, between border and other elements?",
            "options" => [
                "margin",
                "padding",
                "spacing",
                "outside"
            ],
            "answer" => "margin",
            "difficulty" => "Medium"
        ],
        [
            "id" => 250,
            "question" => "What is the default behavior of a hyperlink when clicked?",
            "options" => [
                "Opens in a new window",
                "Opens in the same window/tab",
                "Downloads a file",
                "Opens in a popup"
            ],
            "answer" => "Opens in the same window/tab",
            "difficulty" => "Medium"
        ],
        [
            "id" => 251,
            "question" => "How do you make a link open in a new tab?",
            "options" => [
                "target=\"_blank\"",
                "target=\"_new\"",
                "new=\"_blank\"",
                "tab=\"_new\""
            ],
            "answer" => "target=\"_blank\"",
            "difficulty" => "Medium"
        ],
        [
            "id" => 252,
            "question" => "What is the recommended maximum number of fonts on a website?",
            "options" => [
                "1",
                "3",
                "5",
                "Unlimited"
            ],
            "answer" => "3",
            "difficulty" => "Medium"
        ],
        [
            "id" => 253,
            "question" => "What is the rowspan attribute used for in HTML tables?",
            "options" => [
                "Merges cells horizontally",
                "Merges cells vertically across multiple rows",
                "Adds a new row",
                "Deletes a row"
            ],
            "answer" => "Merges cells vertically across multiple rows",
            "difficulty" => "Medium"
        ],
        [
            "id" => 254,
            "question" => "Which CSS selector targets an element with id=\"header\"?",
            "options" => [
                ".header",
                "#header",
                "header",
                "*header"
            ],
            "answer" => "#header",
            "difficulty" => "Medium"
        ],
        [
            "id" => 255,
            "question" => "Which CSS selector targets all elements with class=\"box\"?",
            "options" => [
                ".box",
                "#box",
                "box",
                "*box"
            ],
            "answer" => ".box",
            "difficulty" => "Medium"
        ],
        [
            "id" => 256,
            "question" => "What is the difference between GET and POST methods?",
            "options" => [
                "GET appends data to URL, POST sends in request body",
                "POST appends to URL, GET sends in body",
                "Both do the same thing",
                "GET is secure, POST is not"
            ],
            "answer" => "GET appends data to URL, POST sends in request body",
            "difficulty" => "Medium"
        ],
        [
            "id" => 257,
            "question" => "What is the purpose of the <label> tag in forms?",
            "options" => [
                "To add a title to the form",
                "To associate text with a form control for accessibility",
                "To create a button",
                "To group form elements"
            ],
            "answer" => "To associate text with a form control for accessibility",
            "difficulty" => "Medium"
        ],
        [
            "id" => 258,
            "question" => "What is the recommended load time for a website to retain visitors?",
            "options" => [
                "5 seconds or less",
                "2 seconds or less",
                "10 seconds or less",
                "1 second or less"
            ],
            "answer" => "2 seconds or less",
            "difficulty" => "Medium"
        ],
        [
            "id" => 259,
            "question" => "What is the purpose of WCAG?",
            "options" => [
                "Web Content Accessibility Guidelines - for web accessibility",
                "Web Coding and Graphics - for design",
                "Worldwide Computer Access Group - for hardware",
                "Web Color Accessibility Guide - for color schemes"
            ],
            "answer" => "Web Content Accessibility Guidelines - for web accessibility",
            "difficulty" => "Medium"
        ],
        [
            "id" => 260,
            "question" => "What does the DOM stand for?",
            "options" => [
                "Document Object Model",
                "Data Object Model",
                "Document Oriented Model",
                "Display Object Model"
            ],
            "answer" => "Document Object Model",
            "difficulty" => "Medium"
        ],
        [
            "id" => 261,
            "question" => "What is the first website ever created?",
            "options" => [
                "http://www.google.com",
                "http://info.cern.ch",
                "http://www.apple.com",
                "http://www.microsoft.com"
            ],
            "answer" => "http://info.cern.ch",
            "difficulty" => "Medium"
        ],
        [
            "id" => 262,
            "question" => "What year was the World Wide Web proposed?",
            "options" => [
                "1985",
                "1989",
                "1991",
                "1993"
            ],
            "answer" => "1989",
            "difficulty" => "Medium"
        ],
        [
            "id" => 263,
            "question" => "What is the first graphical web browser called?",
            "options" => [
                "Netscape",
                "Internet Explorer",
                "Mosaic",
                "WorldWideWeb"
            ],
            "answer" => "Mosaic",
            "difficulty" => "Medium"
        ],
        [
            "id" => 264,
            "question" => "What is a grid-based layout in web design?",
            "options" => [
                "A layout that uses tables only",
                "A structure using columns and rows to organize content",
                "A layout with no structure",
                "A layout that uses only images"
            ],
            "answer" => "A structure using columns and rows to organize content",
            "difficulty" => "Medium"
        ],
        [
            "id" => 265,
            "question" => "What is the difference between <th> and <td> in tables?",
            "options" => [
                "<th> is for header cells, <td> is for data cells",
                "<td> is for headers, <th> is for data",
                "Both are the same",
                "<th> is for rows, <td> is for columns"
            ],
            "answer" => "<th> is for header cells, <td> is for data cells",
            "difficulty" => "Medium"
        ],
        [
            "id" => 266,
            "question" => "What does the <tfoot> tag represent in a table?",
            "options" => [
                "Table header",
                "Table footer group",
                "Table caption",
                "Table body"
            ],
            "answer" => "Table footer group",
            "difficulty" => "Medium"
        ],
        [
            "id" => 267,
            "question" => "What is full-stack development?",
            "options" => [
                "Development using only HTML and CSS",
                "Development of both front-end and back-end",
                "Development of only databases",
                "Development of only mobile apps"
            ],
            "answer" => "Development of both front-end and back-end",
            "difficulty" => "Medium"
        ],

        // ==================== HARD (33 Questions) ====================
        [
            "id" => 268,
            "question" => "What is the cascading nature of CSS?",
            "options" => [
                "Styles applied to parent elements also apply to children",
                "Styles only apply to the direct element",
                "Styles cannot be overridden",
                "Styles apply in reverse order"
            ],
            "answer" => "Styles applied to parent elements also apply to children",
            "difficulty" => "Hard"
        ],
        [
            "id" => 269,
            "question" => "What is the specificity order of CSS selectors (highest to lowest)?",
            "options" => [
                "Inline > ID > Class > Element",
                "Element > Class > ID > Inline",
                "Class > ID > Inline > Element",
                "ID > Inline > Class > Element"
            ],
            "answer" => "Inline > ID > Class > Element",
            "difficulty" => "Hard"
        ],
        [
            "id" => 270,
            "question" => "What is the difference between padding and margin in CSS?",
            "options" => [
                "Padding is inside border, margin is outside border",
                "Margin is inside border, padding is outside border",
                "Both are inside border",
                "Both are outside border"
            ],
            "answer" => "Padding is inside border, margin is outside border",
            "difficulty" => "Hard"
        ],
        [
            "id" => 271,
            "question" => "What is the difference between internal, external, and inline CSS?",
            "options" => [
                "Inline in style attribute, internal in <style> tag, external in .css file",
                "All are the same",
                "Internal is best, external is worst",
                "External cannot override inline"
            ],
            "answer" => "Inline in style attribute, internal in <style> tag, external in .css file",
            "difficulty" => "Hard"
        ],
        [
            "id" => 272,
            "question" => "What is the purpose of the border-collapse property in CSS tables?",
            "options" => [
                "Removes borders",
                "Collapses borders into a single border",
                "Adds more borders",
                "Changes border color"
            ],
            "answer" => "Collapses borders into a single border",
            "difficulty" => "Hard"
        ],
        [
            "id" => 273,
            "question" => "What is the difference between the <thead>, <tbody>, and <tfoot> tags?",
            "options" => [
                "They group header, body, and footer sections of a table",
                "They are all the same",
                "They are for styling only",
                "They are deprecated"
            ],
            "answer" => "They group header, body, and footer sections of a table",
            "difficulty" => "Hard"
        ],
        [
            "id" => 274,
            "question" => "What is an HTTP request composed of?",
            "options" => [
                "URL, Method, Headers, Body",
                "Only URL",
                "Only Method",
                "Only Headers"
            ],
            "answer" => "URL, Method, Headers, Body",
            "difficulty" => "Hard"
        ],
        [
            "id" => 275,
            "question" => "What is the difference between HTTP and HTTPS?",
            "options" => [
                "HTTPS is encrypted (secure), HTTP is not",
                "HTTP is encrypted, HTTPS is not",
                "Both are the same",
                "HTTP is faster than HTTPS"
            ],
            "answer" => "HTTPS is encrypted (secure), HTTP is not",
            "difficulty" => "Hard"
        ],
        [
            "id" => 276,
            "question" => "What is the difference between an absolute URL and a relative URL?",
            "options" => [
                "Absolute includes protocol and domain, relative is path-based",
                "Relative includes protocol, absolute does not",
                "Both are the same",
                "Absolute only works on the same server"
            ],
            "answer" => "Absolute includes protocol and domain, relative is path-based",
            "difficulty" => "Hard"
        ],
        [
            "id" => 277,
            "question" => "What is the purpose of the <!DOCTYPE html> declaration?",
            "options" => [
                "Tells the browser which HTML version to use",
                "Creates an HTML comment",
                "Links to a CSS file",
                "Defines the page title"
            ],
            "answer" => "Tells the browser which HTML version to use",
            "difficulty" => "Hard"
        ],
        [
            "id" => 278,
            "question" => "What is the default method of an HTML form if not specified?",
            "options" => [
                "POST",
                "GET",
                "PUT",
                "DELETE"
            ],
            "answer" => "GET",
            "difficulty" => "Hard"
        ],
        [
            "id" => 279,
            "question" => "What is the difference between <input type=\"submit\"> and <button type=\"submit\">?",
            "options" => [
                "Both submit the form, but <button> can contain HTML content",
                "<input> can contain HTML, <button> cannot",
                "Only <input> works",
                "Only <button> works"
            ],
            "answer" => "Both submit the form, but <button> can contain HTML content",
            "difficulty" => "Hard"
        ],
        [
            "id" => 280,
            "question" => "What is the difference between a class selector and an ID selector in CSS?",
            "options" => [
                "ID is unique (one per page), class can be reused",
                "Class is unique, ID can be reused",
                "Both are unique",
                "Both can be reused"
            ],
            "answer" => "ID is unique (one per page), class can be reused",
            "difficulty" => "Hard"
        ],
        [
            "id" => 281,
            "question" => "What is the box model in CSS?",
            "options" => [
                "Content > Padding > Border > Margin",
                "Margin > Border > Padding > Content",
                "Content > Margin > Border > Padding",
                "Border > Content > Padding > Margin"
            ],
            "answer" => "Content > Padding > Border > Margin",
            "difficulty" => "Hard"
        ],
        [
            "id" => 282,
            "question" => "What is the purpose of the name attribute in form inputs?",
            "options" => [
                "Identifies the input when data is submitted to the server",
                "Styles the input",
                "Creates a label",
                "Sets a default value"
            ],
            "answer" => "Identifies the input when data is submitted to the server",
            "difficulty" => "Hard"
        ],
        [
            "id" => 283,
            "question" => "What is the difference between a hyperlink and a bookmark link?",
            "options" => [
                "Bookmark links navigate to a specific section of a page using #id",
                "Hyperlinks are for external sites only",
                "Bookmarks are for images only",
                "There is no difference"
            ],
            "answer" => "Bookmark links navigate to a specific section of a page using #id",
            "difficulty" => "Hard"
        ],
        [
            "id" => 284,
            "question" => "What is the purpose of the <fieldset> tag in HTML forms?",
            "options" => [
                "Groups related form elements together",
                "Creates a button",
                "Adds a title to the form",
                "Creates a text area"
            ],
            "answer" => "Groups related form elements together",
            "difficulty" => "Hard"
        ],
        [
            "id" => 285,
            "question" => "What is the difference between GET and POST in terms of security?",
            "options" => [
                "GET exposes data in URL, POST hides data in request body",
                "POST exposes data in URL, GET hides data",
                "Both expose data equally",
                "Both are completely secure"
            ],
            "answer" => "GET exposes data in URL, POST hides data in request body",
            "difficulty" => "Hard"
        ],
        [
            "id" => 286,
            "question" => "What is the purpose of the value attribute in form inputs?",
            "options" => [
                "Sets the default or submitted value of the input",
                "Sets the label text",
                "Sets the input type",
                "Sets the input name"
            ],
            "answer" => "Sets the default or submitted value of the input",
            "difficulty" => "Hard"
        ],
        [
            "id" => 287,
            "question" => "What does <input type=\"reset\"> do?",
            "options" => [
                "Resets form fields to their default values",
                "Submits the form",
                "Clears all cookies",
                "Refreshes the page"
            ],
            "answer" => "Resets form fields to their default values",
            "difficulty" => "Hard"
        ],
        [
            "id" => 288,
            "question" => "What is the purpose of the for attribute in the <label> tag?",
            "options" => [
                "Associates the label with a specific form control using the control's id",
                "Creates a loop",
                "Sets the label's font",
                "Adds a border"
            ],
            "answer" => "Associates the label with a specific form control using the control's id",
            "difficulty" => "Hard"
        ],
        [
            "id" => 289,
            "question" => "What is the difference between the <div> and <span> tags?",
            "options" => [
                "<div> is block-level, <span> is inline",
                "<div> is inline, <span> is block-level",
                "Both are block-level",
                "Both are inline"
            ],
            "answer" => "<div> is block-level, <span> is inline",
            "difficulty" => "Hard"
        ],
        [
            "id" => 290,
            "question" => "What is the purpose of the <meta> tag in HTML?",
            "options" => [
                "Provides metadata about the HTML document",
                "Creates a link",
                "Adds an image",
                "Creates a table"
            ],
            "answer" => "Provides metadata about the HTML document",
            "difficulty" => "Hard"
        ],
        [
            "id" => 291,
            "question" => "What is the difference between a block-level and an inline element?",
            "options" => [
                "Block-level takes full width, inline takes only needed width",
                "Inline takes full width, block takes only needed width",
                "Both take full width",
                "Both take only needed width"
            ],
            "answer" => "Block-level takes full width, inline takes only needed width",
            "difficulty" => "Hard"
        ],
        [
            "id" => 292,
            "question" => "What is the purpose of the placeholder attribute in form inputs?",
            "options" => [
                "Shows example text inside the input field",
                "Sets a default value",
                "Validates the input",
                "Disables the input"
            ],
            "answer" => "Shows example text inside the input field",
            "difficulty" => "Hard"
        ],
        [
            "id" => 293,
            "question" => "What is the difference between the <ol> and <ul> tags?",
            "options" => [
                "<ol> is ordered (numbered), <ul> is unordered (bulleted)",
                "<ul> is ordered, <ol> is unordered",
                "Both are ordered",
                "Both are unordered"
            ],
            "answer" => "<ol> is ordered (numbered), <ul> is unordered (bulleted)",
            "difficulty" => "Hard"
        ],
        [
            "id" => 294,
            "question" => "What is the purpose of the target attribute in a hyperlink?",
            "options" => [
                "Specifies where to open the linked document",
                "Sets the link color",
                "Creates a bookmark",
                "Adds a tooltip"
            ],
            "answer" => "Specifies where to open the linked document",
            "difficulty" => "Hard"
        ],
        [
            "id" => 295,
            "question" => "What is the difference between the <strong> and <b> tags?",
            "options" => [
                "<strong> indicates importance (semantic), <b> is just bold (presentational)",
                "Both are the same",
                "<b> indicates importance, <strong> is just bold",
                "Both are deprecated"
            ],
            "answer" => "<strong> indicates importance (semantic), <b> is just bold (presentational)",
            "difficulty" => "Hard"
        ],
        [
            "id" => 296,
            "question" => "What is the difference between the <em> and <i> tags?",
            "options" => [
                "<em> indicates emphasis (semantic), <i> is just italic (presentational)",
                "Both are the same",
                "<i> indicates emphasis, <em> is just italic",
                "Both are deprecated"
            ],
            "answer" => "<em> indicates emphasis (semantic), <i> is just italic (presentational)",
            "difficulty" => "Hard"
        ],
        [
            "id" => 297,
            "question" => "What is the purpose of the required attribute in form inputs?",
            "options" => [
                "Makes the field mandatory before form submission",
                "Sets a default value",
                "Disables the field",
                "Hides the field"
            ],
            "answer" => "Makes the field mandatory before form submission",
            "difficulty" => "Hard"
        ],
        [
            "id" => 298,
            "question" => "What is the difference between the <figure> and <img> tags?",
            "options" => [
                "<figure> can contain captions with <figcaption>, <img> is just an image",
                "Both are the same",
                "<img> can contain captions, <figure> cannot",
                "<figure> is deprecated"
            ],
            "answer" => "<figure> can contain captions with <figcaption>, <img> is just an image",
            "difficulty" => "Hard"
        ],
        [
            "id" => 299,
            "question" => "What is the purpose of the disabled attribute in form inputs?",
            "options" => [
                "Makes the input non-interactive and unsubmittable",
                "Hides the input",
                "Makes the input read-only",
                "Validates the input"
            ],
            "answer" => "Makes the input non-interactive and unsubmittable",
            "difficulty" => "Hard"
        ],
        [
            "id" => 300,
            "question" => "What is the difference between the <article> and <section> tags in HTML5?",
            "options" => [
                "<article> is for self-contained content, <section> is for grouping related content",
                "Both are the same",
                "<section> is for self-contained content, <article> is for grouping",
                "Both are deprecated"
            ],
            "answer" => "<article> is for self-contained content, <section> is for grouping related content",
            "difficulty" => "Hard"
        ]
    ],

    'AppDev' => [

        [
            "id" => 301,
            "question" => "Which language is primarily used for native Android development today?",
            "options" => ["Kotlin", "Swift", "PHP", "C#"],
            "answer" => "Kotlin",
            "difficulty" => "Easy"
        ],
        [
            "id" => 302,
            "question" => "Which language is primarily used for native iOS development?",
            "options" => ["Java", "Swift", "Python", "JavaScript"],
            "answer" => "Swift",
            "difficulty" => "Easy"
        ],
        [
            "id" => 303,
            "question" => "What does APK stand for?",
            "options" => ["Android Package Kit", "Android Programming Key", "Application Package Knowledge", "App Portable Kit"],
            "answer" => "Android Package Kit",
            "difficulty" => "Easy"
        ],
        [
            "id" => 304,
            "question" => "Which IDE is the official tool for Android development?",
            "options" => ["Visual Studio", "Xcode", "Android Studio", "Eclipse"],
            "answer" => "Android Studio",
            "difficulty" => "Easy"
        ],
        [
            "id" => 305,
            "question" => "Which IDE is required for native iOS development?",
            "options" => ["Android Studio", "Xcode", "VS Code", "NetBeans"],
            "answer" => "Xcode",
            "difficulty" => "Easy"
        ],
        [
            "id" => 306,
            "question" => "What is Flutter?",
            "options" => ["A database engine", "A cross-platform UI framework by Google", "A tool for making websites only", "An Android operating system version"],
            "answer" => "A cross-platform UI framework by Google",
            "difficulty" => "Easy"
        ],
        [
            "id" => 307,
            "question" => "What is React Native?",
            "options" => ["A framework for building native apps using React", "A way to run PHP on mobile", "A type of mobile battery", "A game engine"],
            "answer" => "A framework for building native apps using React",
            "difficulty" => "Easy"
        ],
        [
            "id" => 308,
            "question" => "Which language does Flutter use?",
            "options" => ["Java", "JavaScript", "Dart", "Swift"],
            "answer" => "Dart",
            "difficulty" => "Easy"
        ],
        [
            "id" => 309,
            "question" => "What is an Activity in Android?",
            "options" => ["A specific background task", "A single screen with a user interface", "A type of mobile data connection", "A database table"],
            "answer" => "A single screen with a user interface",
            "difficulty" => "Easy"
        ],
        [
            "id" => 310,
            "question" => "What is a ViewController in iOS?",
            "options" => ["A tool to record videos", "The foundation of an app's internal structure and UI", "A type of mobile sensor", "A server configuration"],
            "answer" => "The foundation of an app's internal structure and UI",
            "difficulty" => "Easy"
        ],
        [
            "id" => 311,
            "question" => "Which file is the manifest for an Android app?",
            "options" => ["index.php", "AndroidSettings.xml", "AndroidManifest.xml", "AppConfig.json"],
            "answer" => "AndroidManifest.xml",
            "difficulty" => "Easy"
        ],
        [
            "id" => 312,
            "question" => "What is the purpose of an Intent in Android?",
            "options" => ["To save data to a database", "To request an action from another app component", "To set the app's brightness", "To update the app version"],
            "answer" => "To request an action from another app component",
            "difficulty" => "Easy"
        ],
        [
            "id" => 313,
            "question" => "What is an IPA file in iOS?",
            "options" => ["A type of beer", "An iOS App Store Package file", "An Internal Programming Application", "An Image Processing Agent"],
            "answer" => "An iOS App Store Package file",
            "difficulty" => "Easy"
        ],
        [
            "id" => 314,
            "question" => "Which component of an Android app runs in the background?",
            "options" => ["Activity", "Service", "Content Provider", "Broadcast Receiver"],
            "answer" => "Service",
            "difficulty" => "Easy"
        ],
        [
            "id" => 315,
            "question" => "What is 'Autolayout' in iOS?",
            "options" => ["A way to automatically write code", "A constraint-based layout system", "A tool for auto-updating the app", "A type of screen protector"],
            "answer" => "A constraint-based layout system",
            "difficulty" => "Easy"
        ],
        [
            "id" => 316,
            "question" => "What is the official programming language for Apple's legacy iOS apps?",
            "options" => ["Swift", "Objective-C", "C++", "Ruby"],
            "answer" => "Objective-C",
            "difficulty" => "Easy"
        ],
        [
            "id" => 317,
            "question" => "What does UI stand for?",
            "options" => ["Universal Interface", "User Interaction", "User Interface", "Utility Integration"],
            "answer" => "User Interface",
            "difficulty" => "Easy"
        ],
        [
            "id" => 318,
            "question" => "What does UX stand for?",
            "options" => ["Universal X-ray", "User Experience", "User X-platform", "Utility X-change"],
            "answer" => "User Experience",
            "difficulty" => "Easy"
        ],
        [
            "id" => 319,
            "question" => "What is a 'WebView'?",
            "options" => ["A browser window inside a mobile app", "A type of mobile signal", "A way to see the phone's hardware", "A screen recording tool"],
            "answer" => "A browser window inside a mobile app",
            "difficulty" => "Easy"
        ],
        [
            "id" => 320,
            "question" => "Which company owns the Android operating system?",
            "options" => ["Apple", "Microsoft", "Google", "Samsung"],
            "answer" => "Google",
            "difficulty" => "Easy"
        ],
        [
            "id" => 321,
            "question" => "What is the primary language used for React Native logic?",
            "options" => ["Java", "Swift", "JavaScript/TypeScript", "Python"],
            "answer" => "JavaScript/TypeScript",
            "difficulty" => "Easy"
        ],
        [
            "id" => 322,
            "question" => "What is 'CocoaPods'?",
            "options" => ["A type of chocolate", "A dependency manager for Swift and Objective-C projects", "A tool for Android updates", "A mobile game"],
            "answer" => "A dependency manager for Swift and Objective-C projects",
            "difficulty" => "Easy"
        ],
        [
            "id" => 323,
            "question" => "What is Gradle used for in Android development?",
            "options" => ["Designing icons", "Building and automating the project", "Saving user photos", "Testing mobile signals"],
            "answer" => "Building and automating the project",
            "difficulty" => "Easy"
        ],
        [
            "id" => 324,
            "question" => "What is a 'Simulator' in iOS development?",
            "options" => ["A physical iPhone", "A tool that mimics iOS on a Mac", "A way to simulate battery drain", "A game that simulates life"],
            "answer" => "A tool that mimics iOS on a Mac",
            "difficulty" => "Easy"
        ],
        [
            "id" => 325,
            "question" => "What is an 'Emulator' in Android development?",
            "options" => ["A virtual Android device running on a PC", "A tool to hack apps", "A type of mobile charger", "A screen capture tool"],
            "answer" => "A virtual Android device running on a PC",
            "difficulty" => "Easy"
        ],
        [
            "id" => 326,
            "question" => "What is 'Hot Reload' in Flutter?",
            "options" => ["Restarting the phone", "Quickly seeing code changes without losing app state", "Charging the phone faster", "Updating the OS"],
            "answer" => "Quickly seeing code changes without losing app state",
            "difficulty" => "Easy"
        ],
        [
            "id" => 327,
            "question" => "In mobile development, what is 'Publishing'?",
            "options" => ["Printing the code on paper", "Releasing the app to an App Store", "Writing a blog post", "Sending code to a teammate"],
            "answer" => "Releasing the app to an App Store",
            "difficulty" => "Easy"
        ],
        [
            "id" => 328,
            "question" => "What is 'Firebase'?",
            "options" => ["A fire-fighting app", "A platform by Google for mobile and web development (Auth, Database, etc.)", "A type of mobile processor", "A cross-platform game engine"],
            "answer" => "A platform by Google for mobile and web development (Auth, Database, etc.)",
            "difficulty" => "Easy"
        ],
        [
            "id" => 329,
            "question" => "What is the purpose of 'Push Notifications'?",
            "options" => ["To charge the battery", "To send messages/updates to the user even when the app is closed", "To delete the app", "To increase the screen volume"],
            "answer" => "To send messages/updates to the user even when the app is closed",
            "difficulty" => "Easy"
        ],
        [
            "id" => 330,
            "question" => "What is 'App Store Connect'?",
            "options" => ["A tool to connect to Wi-Fi", "Apple's platform for managing apps on the App Store", "A social media app for developers", "A phone charger brand"],
            "answer" => "Apple's platform for managing apps on the App Store",
            "difficulty" => "Easy"
        ],
        [
            "id" => 331,
            "question" => "What is 'Google Play Console'?",
            "options" => ["A game console by Google", "Google's platform for managing apps on the Play Store", "A way to play Android games on TV", "A coding editor"],
            "answer" => "Google's platform for managing apps on the Play Store",
            "difficulty" => "Easy"
        ],
        [
            "id" => 332,
            "question" => "What is a 'Floating Action Button' (FAB)?",
            "options" => ["A button that floats on the screen (common in Material Design)", "A button that doesn't work", "A button used for navigation only", "A power button"],
            "answer" => "A button that floats on the screen (common in Material Design)",
            "difficulty" => "Easy"
        ],
        [
            "id" => 333,
            "question" => "What is 'Material Design'?",
            "options" => ["A design language by Apple", "A design language by Google", "A type of screen material", "A way to build physical phones"],
            "answer" => "A design language by Google",
            "difficulty" => "Easy"
        ],
        [
            "id" => 334,
            "question" => "What is 'Human Interface Guidelines' (HIG)?",
            "options" => ["A set of rules for robots", "Apple's design guidelines for iOS", "Google's design guidelines", "A health app"],
            "answer" => "Apple's design guidelines for iOS",
            "difficulty" => "Easy"
        ],
        [
            "id" => 335,
            "question" => "What is an 'App Icon'?",
            "options" => ["A famous developer", "The visual representation of the app on the home screen", "A system error", "A type of mobile notification"],
            "answer" => "The visual representation of the app on the home screen",
            "difficulty" => "Easy"
        ],
        [
            "id" => 336,
            "question" => "In Android, which method is called first when an Activity starts?",
            "options" => ["onStart()", "onResume()", "onCreate()", "onPause()"],
            "answer" => "onCreate()",
            "difficulty" => "Medium"
        ],
        [
            "id" => 337,
            "question" => "In iOS, which method is called after the view controller's view has been loaded into memory?",
            "options" => ["viewWillAppear()", "viewDidAppear()", "viewDidLoad()", "viewWillLayoutSubviews()"],
            "answer" => "viewDidLoad()",
            "difficulty" => "Medium"
        ],
        [
            "id" => 338,
            "question" => "What is the purpose of the 'R' class in Android?",
            "options" => ["To handle Networking", "To access app resources (IDs, Strings, Images) in code", "To run Random numbers", "To reset the app"],
            "answer" => "To access app resources (IDs, Strings, Images) in code",
            "difficulty" => "Medium"
        ],
        [
            "id" => 339,
            "question" => "What is 'Shared Preferences' in Android?",
            "options" => ["A way to share photos", "A framework for storing small amounts of primitive data as key-value pairs", "A social media API", "A type of phone setting"],
            "answer" => "A framework for storing small amounts of primitive data as key-value pairs",
            "difficulty" => "Medium"
        ],
        [
            "id" => 340,
            "question" => "What is 'UserDefaults' in iOS?",
            "options" => ["A list of app users", "A simple way to store small amounts of data (similar to Shared Preferences)", "A type of mobile security", "An Apple ID setting"],
            "answer" => "A simple way to store small amounts of data (similar to Shared Preferences)",
            "difficulty" => "Medium"
        ],
        [
            "id" => 341,
            "question" => "What is 'Core Data' in iOS?",
            "options" => ["A hardware component", "A framework for managing the model layer objects in your application", "A way to connect to Wi-Fi", "A tool for screen brightness"],
            "answer" => "A framework for managing the model layer objects in your application",
            "difficulty" => "Medium"
        ],
        [
            "id" => 342,
            "question" => "What is 'Room' in Android development?",
            "options" => ["A physical officeSpace", "A persistence library that provides an abstraction layer over SQLite", "A chat application", "A way to organize the code folders"],
            "answer" => "A persistence library that provides an abstraction layer over SQLite",
            "difficulty" => "Medium"
        ],
        [
            "id" => 343,
            "question" => "What is an 'Adapter' useful for in Android?",
            "options" => ["Connecting the phone to a PC", "Bridging a data source and a UI component (like ListView/RecyclerView)", "Changing the screen orientation", "Translating languages"],
            "answer" => "Bridging a data source and a UI component (like ListView/RecyclerView)",
            "difficulty" => "Medium"
        ],
        [
            "id" => 344,
            "question" => "What is a 'Fragment' in Android?",
            "options" => ["A piece of broken screen", "A modular portion of an Activity's user interface", "A type of mobile data packet", "A small image"],
            "answer" => "A modular portion of an Activity's user interface",
            "difficulty" => "Medium"
        ],
        [
            "id" => 345,
            "question" => "What is 'SwiftUI'?",
            "options" => ["A tool for making websites", "Apple's modern declarative framework for building user interfaces", "A type of mobile battery", "A social network for developers"],
            "answer" => "Apple's modern declarative framework for building user interfaces",
            "difficulty" => "Medium"
        ],
        [
            "id" => 346,
            "question" => "What is 'Jetpack Compose'?",
            "options" => ["A flight simulator", "Google's modern toolkit for building native Android UI", "A tool for sending emails", "A database engine"],
            "answer" => "Google's modern toolkit for building native Android UI",
            "difficulty" => "Medium"
        ],
        [
            "id" => 347,
            "question" => "What is 'MVC' in app development?",
            "options" => ["Mobile View Center", "Model-View-Controller architecture", "Multi-Visual Code", "Maximum Volume Control"],
            "answer" => "Model-View-Controller architecture",
            "difficulty" => "Medium"
        ],
        [
            "id" => 348,
            "question" => "What is 'MVVM'?",
            "options" => ["Model-View-ViewModel architecture", "Mobile Video Viewer Machine", "Multi-Variant Volume Mode", "Minimum Viable Model"],
            "answer" => "Model-View-ViewModel architecture",
            "difficulty" => "Medium"
        ],
        [
            "id" => 349,
            "question" => "What is 'Data Binding'?",
            "options" => ["Tying data together with string", "A technique that connects UI components to data sources", "Encrypting user data", "Merging two databases"],
            "answer" => "A technique that connects UI components to data sources",
            "difficulty" => "Medium"
        ],
        [
            "id" => 350,
            "question" => "What is the purpose of 'Dependency Injection'?",
            "options" => ["To inject viruses into apps", "To make code more modular and testable by providing dependencies from outside", "To speed up the network", "To charge the phone"],
            "answer" => "To make code more modular and testable by providing dependencies from outside",
            "difficulty" => "Medium"
        ],
        [
            "id" => 351,
            "question" => "What is 'Retrofit' in Android?",
            "options" => ["A way to use old code", "A type-safe HTTP client for Android and Java", "A tool for screen rotation", "A theme for Android apps"],
            "answer" => "A type-safe HTTP client for Android and Java",
            "difficulty" => "Medium"
        ],
        [
            "id" => 352,
            "question" => "What is 'Alamofire' in iOS?",
            "options" => ["A mobile fire alarm", "An HTTP networking library written in Swift", "A graphics framework", "A physical sensor handle"],
            "answer" => "An HTTP networking library written in Swift",
            "difficulty" => "Medium"
        ],
        [
            "id" => 353,
            "question" => "What is 'Lottie'?",
            "options" => ["A lottery app", "A library for rendering high-quality Adobe After Effects animations", "A type of mobile icon", "A database system"],
            "answer" => "A library for rendering high-quality Adobe After Effects animations",
            "difficulty" => "Medium"
        ],
        [
            "id" => 354,
            "question" => "What is 'Prop Drilling' in React Native?",
            "options" => ["A drill tool for phones", "Passing data through several layers of components", "A type of memory leak", "A database optimization"],
            "answer" => "Passing data through several layers of components",
            "difficulty" => "Medium"
        ],
        [
            "id" => 355,
            "question" => "What is the 'Virtual DOM' in React Native?",
            "options" => ["A hidden web page", "A simplified copy of the UI kept in memory for performance mapping", "A virtual mobile device", "A database concept"],
            "answer" => "A simplified copy of the UI kept in memory for performance mapping",
            "difficulty" => "Medium"
        ],
        [
            "id" => 356,
            "question" => "What are 'Widgets' in Flutter?",
            "options" => ["The basic building blocks of a Flutter app's UI", "Small apps on the home screen", "Database tables", "Phone settings"],
            "answer" => "The basic building blocks of a Flutter app's UI",
            "difficulty" => "Medium"
        ],
        [
            "id" => 357,
            "question" => "What is a 'StatefulWidget' in Flutter?",
            "options" => ["A widget that never changes", "A widget that has mutable state (can change during its lifetime)", "A widget used only for storage", "A background task"],
            "answer" => "A widget that has mutable state (can change during its lifetime)",
            "difficulty" => "Medium"
        ],
        [
            "id" => 358,
            "question" => "What is the purpose of the 'pubspec.yaml' file in Flutter?",
            "options" => ["To hold the app's secret keys", "To manage project dependencies and assets", "To store user passwords", "To define screen layouts"],
            "answer" => "To manage project dependencies and assets",
            "difficulty" => "Medium"
        ],
        [
            "id" => 359,
            "question" => "What is 'App Indexing'?",
            "options" => ["Creating a table of contents for the app", "A way to make app content searchable via Google search", "Organizing the app's files", "Updating the App Store ranking"],
            "answer" => "A way to make app content searchable via Google search",
            "difficulty" => "Medium"
        ],
        [
            "id" => 360,
            "question" => "What is 'Deep Linking'?",
            "options" => ["A link to a specific location inside an app", "A link to the deep web", "A hidden link in the code", "A way to link two databases"],
            "answer" => "A link to a specific location inside an app",
            "difficulty" => "Medium"
        ],
        [
            "id" => 361,
            "question" => "What is the purpose of 'proguard' or 'r8' in Android?",
            "options" => ["To make the code faster", "To shrink, optimize, and obfuscate your code", "To backup the app", "To design UI icons"],
            "answer" => "To shrink, optimize, and obfuscate your code",
            "difficulty" => "Medium"
        ],
        [
            "id" => 362,
            "question" => "What is 'Bitcode' in iOS development?",
            "options" => ["A type of cryptocurrency", "An intermediate representation of your app for Apple to optimize", "A tool for encryption", "A type of font"],
            "answer" => "An intermediate representation of your app for Apple to optimize",
            "difficulty" => "Medium"
        ],
        [
            "id" => 363,
            "question" => "What is a 'Crashlytics'?",
            "options" => ["A game about crashing cars", "A tool for reporting app crashes in real-time", "A way to test battery life", "An app for analyzing car crashes"],
            "answer" => "A tool for reporting app crashes in real-time",
            "difficulty" => "Medium"
        ],
        [
            "id" => 364,
            "question" => "What is 'In-App Purchase' (IAP)?",
            "options" => ["Buying a new phone", "Purchasing digital content/services inside the app", "Buying the app from the store", "A way to pay phone bills"],
            "answer" => "Purchasing digital content/services inside the app",
            "difficulty" => "Medium"
        ],
        [
            "id" => 365,
            "question" => "What is 'TestFlight'?",
            "options" => ["A flight simulator for pilots", "Apple's platform for beta testing apps", "A tool for measuring phone speed", "A mobile network test"],
            "answer" => "Apple's platform for beta testing apps",
            "difficulty" => "Medium"
        ],
        [
            "id" => 366,
            "question" => "In Android, what is the 'Lifecycle' of an Activity?",
            "options" => ["The time it takes to build the app", "The sequence of states an activity goes through from creation to destruction", "How long the battery lasts while using the activity", "The number of times the user opens it"],
            "answer" => "The sequence of states an activity goes through from creation to destruction",
            "difficulty" => "Hard"
        ],
        [
            "id" => 367,
            "question" => "What is 'Memory Leak' in mobile development?",
            "options" => ["When the phone runs out of storage", "When an app fails to release memory it no longer needs", "When the battery drains too fast", "When user data is stolen"],
            "answer" => "When an app fails to release memory it no longer needs",
            "difficulty" => "Hard"
        ],
        [
            "id" => 368,
            "question" => "What is 'Garbage Collection'?",
            "options" => ["An app for recycling", "The process of automatically reclaiming memory used by objects following certain rules", "Deleting old apps", "Cleaning the phone screen"],
            "answer" => "The process of automatically reclaiming memory used by objects following certain rules",
            "difficulty" => "Hard"
        ],
        [
            "id" => 369,
            "question" => "What is 'ARC' (Automatic Reference Counting) in iOS?",
            "options" => ["A curved UI element", "A memory management feature where the compiler manages lifespan of objects", "A type of mobile signal", "A way to count app downloads"],
            "answer" => "A memory management feature where the compiler manages lifespan of objects",
            "difficulty" => "Hard"
        ],
        [
            "id" => 370,
            "question" => "What is 'Race Condition' in concurrent programming?",
            "options" => ["A game where you race against time", "When two threads access shared data simultaneously and cause unexpected results", "When the CPU becomes too hot", "When two apps compete for data"],
            "answer" => "When two threads access shared data simultaneously and cause unexpected results",
            "difficulty" => "Hard"
        ],
        [
            "id" => 371,
            "question" => "What is 'ANR' in Android?",
            "options" => ["Android Network Receiver", "Application Not Responding", "Android Next Release", "Application Navigation Route"],
            "answer" => "Application Not Responding",
            "difficulty" => "Hard"
        ],
        [
            "id" => 372,
            "question" => "What is the purpose of 'ViewModel' in Android Architecture Components?",
            "options" => ["To store all app images", "To store and manage UI-related data in a lifecycle-conscious way", "To design the app layout", "To handle network requests only"],
            "answer" => "To store and manage UI-related data in a lifecycle-conscious way",
            "difficulty" => "Hard"
        ],
        [
            "id" => 373,
            "question" => "What is 'GCD' (Grand Central Dispatch) in iOS?",
            "options" => ["A central train station app", "A low-level API for managing concurrent operations", "Apple's cloud storage service", "A type of screen resolution"],
            "answer" => "A low-level API for managing concurrent operations",
            "difficulty" => "Hard"
        ],
        [
            "id" => 374,
            "question" => "What is 'Combine' framework in iOS?",
            "options" => ["Merging two apps", "Apple's reactive programming framework", "A way to combine databases", "A tool for combining images"],
            "answer" => "Apple's reactive programming framework",
            "difficulty" => "Hard"
        ],
        [
            "id" => 375,
            "question" => "What is 'Coroutines' in Kotlin/Android?",
            "options" => ["A way to run code in parallel using threads efficiently", "A type of mobile sensor", "A tool for designing animations", "A database query language"],
            "answer" => "A way to run code in parallel using threads efficiently",
            "difficulty" => "Hard"
        ],
        [
            "id" => 376,
            "question" => "What is 'Cold vs Hot Observables'?",
            "options" => ["The temperature of the phone", "Concepts in reactive programming about how data streams behave", "A type of mobile notification", "A way to measure app speed"],
            "answer" => "Concepts in reactive programming about how data streams behave",
            "difficulty" => "Hard"
        ],
        [
            "id" => 377,
            "question" => "What is 'Method Swizzling' in Objective-C/iOS?",
            "options" => ["A coding error", "Changing the implementation of an existing selector at runtime", "Drunk coding", "Deleting methods"],
            "answer" => "Changing the implementation of an existing selector at runtime",
            "difficulty" => "Hard"
        ],
        [
            "id" => 378,
            "question" => "What is 'Bridge' in React Native?",
            "options" => ["A literal bridge", "The layer that allows asynchronous communication between JavaScript and Native code", "A tool for connecting two phones", "A type of network cable"],
            "answer" => "The layer that allows asynchronous communication between JavaScript and Native code",
            "difficulty" => "Hard"
        ],
        [
            "id" => 379,
            "question" => "What is 'JSI' (JavaScript Interface) in React Native?",
            "options" => ["A new coding language", "A more efficient bridge for direct communication between JS and C++", "A way to use Java in JavaScript", "A system error"],
            "answer" => "A more efficient bridge for direct communication between JS and C++",
            "difficulty" => "Hard"
        ],
        [
            "id" => 380,
            "question" => "What is 'Skia' in Flutter?",
            "options" => ["A mountain in Google Maps", "An open-source 2D graphics library used for rendering Flutter UI", "A type of mobile battery", "A social network for Flutter developers"],
            "answer" => "An open-source 2D graphics library used for rendering Flutter UI",
            "difficulty" => "Hard"
        ],
        [
            "id" => 381,
            "question" => "What is 'Serialization' in app development?",
            "options" => ["Making an app about TV series", "Converting an object into a format that can be stored or transmitted", "Encrypting passwords", "Sorting a list"],
            "answer" => "Converting an object into a format that can be stored or transmitted",
            "difficulty" => "Hard"
        ],
        [
            "id" => 382,
            "question" => "What is 'Deserialization'?",
            "options" => ["Deleting an app series", "Reconstructing an object from a string/byte stream", "Reversing encryption", "Unscheduling a task"],
            "answer" => "Reconstructing an object from a string/byte stream",
            "difficulty" => "Hard"
        ],
        [
            "id" => 383,
            "question" => "What is 'SSL Pinning'?",
            "options" => ["A security technique that ensures the app communicates only with the expected server", "Fixing a screen on a pin", "A type of mobile login", "Connecting to Wi-Fi"],
            "answer" => "A security technique that ensures the app communicates only with the expected server",
            "difficulty" => "Hard"
        ],
        [
            "id" => 384,
            "question" => "What is 'OAuth 2.0'?",
            "options" => ["A version of the Android OS", "An authorization framework that allows third-party services to access data", "A tool for database optimization", "A type of phone charger"],
            "answer" => "An authorization framework that allows third-party services to access data",
            "difficulty" => "Hard"
        ],
        [
            "id" => 385,
            "question" => "What does 'JWT' stand for in authentication?",
            "options" => ["Java Web Tool", "JSON Web Token", "Just Write Text", "Joint Web Team"],
            "answer" => "JSON Web Token",
            "difficulty" => "Hard"
        ],
        [
            "id" => 386,
            "question" => "What is 'Profiling' an app?",
            "options" => ["Writing a user profile", "Analyzing the app's performance (CPU, Memory, Battery) to find bottlenecks", "Designing a user interface", "Setting up the app's settings"],
            "answer" => "Analyzing the app's performance (CPU, Memory, Battery) to find bottlenecks",
            "difficulty" => "Hard"
        ],
        [
            "id" => 387,
            "question" => "What is 'Unit Testing'?",
            "options" => ["Testing the entire app at once", "Testing individual components of the code in isolation", "Testing the phone's hardware", "Testing the network speed"],
            "answer" => "Testing individual components of the code in isolation",
            "difficulty" => "Hard"
        ],
        [
            "id" => 388,
            "question" => "What is 'UI Testing'?",
            "options" => ["Testing the user's intelligence", "Automated tests that interact with the app's user interface", "Testing the phone's screen colors", "Asking users for feedback"],
            "answer" => "Automated tests that interact with the app's user interface",
            "difficulty" => "Hard"
        ],
        [
            "id" => 389,
            "question" => "What is 'Regression Testing'?",
            "options" => ["Testing how to go backwards in the app", "Testing existing functionality after changes to ensure nothing broke", "Testing old versions of the app", "Testing the app on old phones"],
            "answer" => "Testing existing functionality after changes to ensure nothing broke",
            "difficulty" => "Hard"
        ],
        [
            "id" => 390,
            "question" => "What is 'CI/CD'?",
            "options" => ["Computer Interface / Code Design", "Continuous Integration and Continuous Deployment", "Code Inspection / Color Design", "Central Installation / Code Distribution"],
            "answer" => "Continuous Integration and Continuous Deployment",
            "difficulty" => "Hard"
        ],
        [
            "id" => 391,
            "question" => "What is 'Sandboxing' in mobile security?",
            "options" => ["Playing with sand", "Restricting an app to its own environment so it can't access other apps' data", "Making a game with a sandbox mode", "Cleaning up the code"],
            "answer" => "Restricting an app to its own environment so it can't access other apps' data",
            "difficulty" => "Hard"
        ],
        [
            "id" => 392,
            "question" => "What is 'Rooting' on Android?",
            "options" => ["Growing a plant app", "Gaining administrative access to the Android file system", "Deleting the code from its root folder", "Turning the phone off"],
            "answer" => "Gaining administrative access to the Android file system",
            "difficulty" => "Hard"
        ],
        [
            "id" => 393,
            "question" => "What is 'Jailbreaking' on iOS?",
            "options" => ["Escaping from a virtual prison game", "Removing software restrictions imposed by Apple on iOS", "Breaking the phone's screen", "Downloading apps for free"],
            "answer" => "Removing software restrictions imposed by Apple on iOS",
            "difficulty" => "Hard"
        ],
        [
            "id" => 394,
            "question" => "What is 'Lazy Loading'?",
            "options" => ["Loading the app when the developer feels like it", "Delaying the initialization of an object until it is actually needed", "A slow network connection", "A background task that never finishes"],
            "answer" => "Delaying the initialization of an object until it is actually needed",
            "difficulty" => "Hard"
        ],
        [
            "id" => 395,
            "question" => "What is 'Pagination' in data loading?",
            "options" => ["Numbering the pages of a book", "Dividing large amounts of data into smaller chunks (pages) for loading", "Sorting data by name", "Merging data folders"],
            "answer" => "Dividing large amounts of data into smaller chunks (pages) for loading",
            "difficulty" => "Hard"
        ],
        [
            "id" => 396,
            "question" => "What is 'WebAssembly' (Wasm) in mobile context?",
            "options" => ["A way to build mobile web pages", "A binary instruction format for a stack-based virtual machine to run code at near-native speed", "A tool for designing websites", "A type of mobile processor"],
            "answer" => "A binary instruction format for a stack-based virtual machine to run code at near-native speed",
            "difficulty" => "Hard"
        ],
        [
            "id" => 397,
            "question" => "What is 'Containerization' (like Docker) in mobile backend?",
            "options" => ["Organizing photos in containers", "Packaging software into standardized units for deployment", "Placing the app in a box", "Organizing files on the phone"],
            "answer" => "Packaging software into standardized units for deployment",
            "difficulty" => "Hard"
        ],
        [
            "id" => 398,
            "question" => "What is 'Microservices' architecture?",
            "options" => ["Using very small mobile devices", "Designing an app as a collection of small, independent services", "Using tiny lines of code", "A tool for microscopic photography"],
            "answer" => "Designing an app as a collection of small, independent services",
            "difficulty" => "Hard"
        ],
        [
            "id" => 399,
            "question" => "What is 'App Thinning' in iOS?",
            "options" => ["Making the phone thinner", "A set of technologies to optimize app delivery to different devices", "Deleting unnecessary files", "A diet app"],
            "answer" => "A set of technologies to optimize app delivery to different devices",
            "difficulty" => "Hard"
        ],
        [
            "id" => 400,
            "question" => "What is 'Dynamic Delivery' in Android?",
            "options" => ["Delivering phones by bike", "A feature that allows users to download only the features they need", "A fast shipping service", "Updating the app in the background"],
            "answer" => "A feature that allows users to download only the features they need",
            "difficulty" => "Hard"
        ]
    ],
];
