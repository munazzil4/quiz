<?php
/**
 * Quiz-System-in-PHP-Laravel
 * Author: Berkan Yeşilyurt (https://github.com/BerkanYesilyurt)
 * Repository: https://github.com/BerkanYesilyurt/Quiz-System-in-PHP-Laravel
 */
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('quiz_questions')->insert([
            [
                'question' => 'Which of the following is not a variable scope in PHP?',
                'A' => 'Extern',
                'B' => 'Local',
                'C' => 'Static',
                'D' => 'Global',
                'trueOption' => 'A',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'Which of the following is correct to add a comment in php?',
                'A' => '& …… &',
                'B' => '// ……',
                'C' => '/* …… */',
                'D' => 'Both (b) and (c)',
                'trueOption' => 'D',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'Which of the following is used to display the output in PHP?',
                'A' => 'echo',
                'B' => 'write',
                'C' => 'print',
                'D' => 'Both (a) and (c)',
                'trueOption' => 'D',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'Which of the following is the use of strlen() function in PHP?',
                'A' => 'The strlen() function returns the type of string',
                'B' => 'The strlen() function returns the length of string',
                'C' => 'The strlen() function returns the value of string',
                'D' => 'The strlen() function returns both value and type of string',
                'trueOption' => 'B',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'Which of the following is used for concatenation in PHP?',
                'A' => '+ (plus)',
                'B' => '* (Asterisk)',
                'C' => '. (dot)',
                'D' => 'append()',
                'trueOption' => 'C',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => ' Which of the following starts with __ (double underscore) in PHP?',
                'A' => 'Inbuilt constants',
                'B' => 'User-defined constants',
                'C' => 'Magic constants',
                'D' => 'Default constants',
                'trueOption' => 'C',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'Which of the following is the use of strpos() function in PHP?',
                'A' => 'The strpos() function is used to search for the spaces in a string',
                'B' => 'The strpos() function is used to search for a number in a string',
                'C' => 'The strpos() function is used to search for a character/text in a string',
                'D' => 'The strpos() function is used to search for a capitalize character in a string',
                'trueOption' => 'C',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'Which of the following PHP function is used to generate unique id?',
                'A' => 'id()',
                'B' => 'mdid()',
                'C' => 'uniqueid()',
                'D' => 'None of the above',
                'trueOption' => 'C',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'Which of the following is the correct way to open the file "sample.txt" as readable?',
                'A' => 'fopen("sample.txt", "r");',
                'B' => 'fopen("sample.txt", "r+");',
                'C' => 'fopen("sample.txt", "read");',
                'D' => 'fopen("sample.txt");',
                'trueOption' => 'A',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'Which of the following function displays the information about PHP and its configuration?',
                'A' => 'php_info()',
                'B' => 'phpinfo()',
                'C' => 'info()',
                'D' => 'None of the above',
                'trueOption' => 'B',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
        ]);
    }
}
