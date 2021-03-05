<?php

use Illuminate\Database\Seeder;

class ZonesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('zones')->delete();
        
        \DB::table('zones')->insert(array (
            0 => 
            array (
                'zone_id' => 1,
                'zone_country_id' => 223,
                'zone_code' => 'AL',
                'zone_name' => 'Alabama',
            ),
            1 => 
            array (
                'zone_id' => 2,
                'zone_country_id' => 223,
                'zone_code' => 'AK',
                'zone_name' => 'Alaska',
            ),
            2 => 
            array (
                'zone_id' => 3,
                'zone_country_id' => 223,
                'zone_code' => 'AS',
                'zone_name' => 'American Samoa',
            ),
            3 => 
            array (
                'zone_id' => 4,
                'zone_country_id' => 223,
                'zone_code' => 'AZ',
                'zone_name' => 'Arizona',
            ),
            4 => 
            array (
                'zone_id' => 5,
                'zone_country_id' => 223,
                'zone_code' => 'AR',
                'zone_name' => 'Arkansas',
            ),
            5 => 
            array (
                'zone_id' => 6,
                'zone_country_id' => 223,
                'zone_code' => 'AF',
                'zone_name' => 'Armed Forces Africa',
            ),
            6 => 
            array (
                'zone_id' => 7,
                'zone_country_id' => 223,
                'zone_code' => 'AA',
                'zone_name' => 'Armed Forces Americas',
            ),
            7 => 
            array (
                'zone_id' => 8,
                'zone_country_id' => 223,
                'zone_code' => 'AC',
                'zone_name' => 'Armed Forces Canada',
            ),
            8 => 
            array (
                'zone_id' => 9,
                'zone_country_id' => 223,
                'zone_code' => 'AE',
                'zone_name' => 'Armed Forces Europe',
            ),
            9 => 
            array (
                'zone_id' => 10,
                'zone_country_id' => 223,
                'zone_code' => 'AM',
                'zone_name' => 'Armed Forces Middle East',
            ),
            10 => 
            array (
                'zone_id' => 11,
                'zone_country_id' => 223,
                'zone_code' => 'AP',
                'zone_name' => 'Armed Forces Pacific',
            ),
            11 => 
            array (
                'zone_id' => 12,
                'zone_country_id' => 223,
                'zone_code' => 'CA',
                'zone_name' => 'California',
            ),
            12 => 
            array (
                'zone_id' => 13,
                'zone_country_id' => 223,
                'zone_code' => 'CO',
                'zone_name' => 'Colorado',
            ),
            13 => 
            array (
                'zone_id' => 14,
                'zone_country_id' => 223,
                'zone_code' => 'CT',
                'zone_name' => 'Connecticut',
            ),
            14 => 
            array (
                'zone_id' => 15,
                'zone_country_id' => 223,
                'zone_code' => 'DE',
                'zone_name' => 'Delaware',
            ),
            15 => 
            array (
                'zone_id' => 16,
                'zone_country_id' => 223,
                'zone_code' => 'DC',
                'zone_name' => 'District of Columbia',
            ),
            16 => 
            array (
                'zone_id' => 17,
                'zone_country_id' => 223,
                'zone_code' => 'FM',
                'zone_name' => 'Federated States Of Micronesia',
            ),
            17 => 
            array (
                'zone_id' => 18,
                'zone_country_id' => 223,
                'zone_code' => 'FL',
                'zone_name' => 'Florida',
            ),
            18 => 
            array (
                'zone_id' => 19,
                'zone_country_id' => 223,
                'zone_code' => 'GA',
                'zone_name' => 'Georgia',
            ),
            19 => 
            array (
                'zone_id' => 20,
                'zone_country_id' => 223,
                'zone_code' => 'GU',
                'zone_name' => 'Guam',
            ),
            20 => 
            array (
                'zone_id' => 21,
                'zone_country_id' => 223,
                'zone_code' => 'HI',
                'zone_name' => 'Hawaii',
            ),
            21 => 
            array (
                'zone_id' => 22,
                'zone_country_id' => 223,
                'zone_code' => 'ID',
                'zone_name' => 'Idaho',
            ),
            22 => 
            array (
                'zone_id' => 23,
                'zone_country_id' => 223,
                'zone_code' => 'IL',
                'zone_name' => 'Illinois',
            ),
            23 => 
            array (
                'zone_id' => 24,
                'zone_country_id' => 223,
                'zone_code' => 'IN',
                'zone_name' => 'Indiana',
            ),
            24 => 
            array (
                'zone_id' => 25,
                'zone_country_id' => 223,
                'zone_code' => 'IA',
                'zone_name' => 'Iowa',
            ),
            25 => 
            array (
                'zone_id' => 26,
                'zone_country_id' => 223,
                'zone_code' => 'KS',
                'zone_name' => 'Kansas',
            ),
            26 => 
            array (
                'zone_id' => 27,
                'zone_country_id' => 223,
                'zone_code' => 'KY',
                'zone_name' => 'Kentucky',
            ),
            27 => 
            array (
                'zone_id' => 28,
                'zone_country_id' => 223,
                'zone_code' => 'LA',
                'zone_name' => 'Louisiana',
            ),
            28 => 
            array (
                'zone_id' => 29,
                'zone_country_id' => 223,
                'zone_code' => 'ME',
                'zone_name' => 'Maine',
            ),
            29 => 
            array (
                'zone_id' => 30,
                'zone_country_id' => 223,
                'zone_code' => 'MH',
                'zone_name' => 'Marshall Islands',
            ),
            30 => 
            array (
                'zone_id' => 31,
                'zone_country_id' => 223,
                'zone_code' => 'MD',
                'zone_name' => 'Maryland',
            ),
            31 => 
            array (
                'zone_id' => 32,
                'zone_country_id' => 223,
                'zone_code' => 'MA',
                'zone_name' => 'Massachusetts',
            ),
            32 => 
            array (
                'zone_id' => 33,
                'zone_country_id' => 223,
                'zone_code' => 'MI',
                'zone_name' => 'Michigan',
            ),
            33 => 
            array (
                'zone_id' => 34,
                'zone_country_id' => 223,
                'zone_code' => 'MN',
                'zone_name' => 'Minnesota',
            ),
            34 => 
            array (
                'zone_id' => 35,
                'zone_country_id' => 223,
                'zone_code' => 'MS',
                'zone_name' => 'Mississippi',
            ),
            35 => 
            array (
                'zone_id' => 36,
                'zone_country_id' => 223,
                'zone_code' => 'MO',
                'zone_name' => 'Missouri',
            ),
            36 => 
            array (
                'zone_id' => 37,
                'zone_country_id' => 223,
                'zone_code' => 'MT',
                'zone_name' => 'Montana',
            ),
            37 => 
            array (
                'zone_id' => 38,
                'zone_country_id' => 223,
                'zone_code' => 'NE',
                'zone_name' => 'Nebraska',
            ),
            38 => 
            array (
                'zone_id' => 39,
                'zone_country_id' => 223,
                'zone_code' => 'NV',
                'zone_name' => 'Nevada',
            ),
            39 => 
            array (
                'zone_id' => 40,
                'zone_country_id' => 223,
                'zone_code' => 'NH',
                'zone_name' => 'New Hampshire',
            ),
            40 => 
            array (
                'zone_id' => 41,
                'zone_country_id' => 223,
                'zone_code' => 'NJ',
                'zone_name' => 'New Jersey',
            ),
            41 => 
            array (
                'zone_id' => 42,
                'zone_country_id' => 223,
                'zone_code' => 'NM',
                'zone_name' => 'New Mexico',
            ),
            42 => 
            array (
                'zone_id' => 43,
                'zone_country_id' => 223,
                'zone_code' => 'NY',
                'zone_name' => 'New York',
            ),
            43 => 
            array (
                'zone_id' => 44,
                'zone_country_id' => 223,
                'zone_code' => 'NC',
                'zone_name' => 'North Carolina',
            ),
            44 => 
            array (
                'zone_id' => 45,
                'zone_country_id' => 223,
                'zone_code' => 'ND',
                'zone_name' => 'North Dakota',
            ),
            45 => 
            array (
                'zone_id' => 46,
                'zone_country_id' => 223,
                'zone_code' => 'MP',
                'zone_name' => 'Northern Mariana Islands',
            ),
            46 => 
            array (
                'zone_id' => 47,
                'zone_country_id' => 223,
                'zone_code' => 'OH',
                'zone_name' => 'Ohio',
            ),
            47 => 
            array (
                'zone_id' => 48,
                'zone_country_id' => 223,
                'zone_code' => 'OK',
                'zone_name' => 'Oklahoma',
            ),
            48 => 
            array (
                'zone_id' => 49,
                'zone_country_id' => 223,
                'zone_code' => 'OR',
                'zone_name' => 'Oregon',
            ),
            49 => 
            array (
                'zone_id' => 50,
                'zone_country_id' => 223,
                'zone_code' => 'PW',
                'zone_name' => 'Palau',
            ),
            50 => 
            array (
                'zone_id' => 51,
                'zone_country_id' => 223,
                'zone_code' => 'PA',
                'zone_name' => 'Pennsylvania',
            ),
            51 => 
            array (
                'zone_id' => 52,
                'zone_country_id' => 223,
                'zone_code' => 'PR',
                'zone_name' => 'Puerto Rico',
            ),
            52 => 
            array (
                'zone_id' => 53,
                'zone_country_id' => 223,
                'zone_code' => 'RI',
                'zone_name' => 'Rhode Island',
            ),
            53 => 
            array (
                'zone_id' => 54,
                'zone_country_id' => 223,
                'zone_code' => 'SC',
                'zone_name' => 'South Carolina',
            ),
            54 => 
            array (
                'zone_id' => 55,
                'zone_country_id' => 223,
                'zone_code' => 'SD',
                'zone_name' => 'South Dakota',
            ),
            55 => 
            array (
                'zone_id' => 56,
                'zone_country_id' => 223,
                'zone_code' => 'TN',
                'zone_name' => 'Tennessee',
            ),
            56 => 
            array (
                'zone_id' => 57,
                'zone_country_id' => 223,
                'zone_code' => 'TX',
                'zone_name' => 'Texas',
            ),
            57 => 
            array (
                'zone_id' => 58,
                'zone_country_id' => 223,
                'zone_code' => 'UT',
                'zone_name' => 'Utah',
            ),
            58 => 
            array (
                'zone_id' => 59,
                'zone_country_id' => 223,
                'zone_code' => 'VT',
                'zone_name' => 'Vermont',
            ),
            59 => 
            array (
                'zone_id' => 60,
                'zone_country_id' => 223,
                'zone_code' => 'VI',
                'zone_name' => 'Virgin Islands',
            ),
            60 => 
            array (
                'zone_id' => 61,
                'zone_country_id' => 223,
                'zone_code' => 'VA',
                'zone_name' => 'Virginia',
            ),
            61 => 
            array (
                'zone_id' => 62,
                'zone_country_id' => 223,
                'zone_code' => 'WA',
                'zone_name' => 'Washington',
            ),
            62 => 
            array (
                'zone_id' => 63,
                'zone_country_id' => 223,
                'zone_code' => 'WV',
                'zone_name' => 'West Virginia',
            ),
            63 => 
            array (
                'zone_id' => 64,
                'zone_country_id' => 223,
                'zone_code' => 'WI',
                'zone_name' => 'Wisconsin',
            ),
            64 => 
            array (
                'zone_id' => 65,
                'zone_country_id' => 223,
                'zone_code' => 'WY',
                'zone_name' => 'Wyoming',
            ),
            65 => 
            array (
                'zone_id' => 66,
                'zone_country_id' => 38,
                'zone_code' => 'AB',
                'zone_name' => 'Alberta',
            ),
            66 => 
            array (
                'zone_id' => 67,
                'zone_country_id' => 38,
                'zone_code' => 'BC',
                'zone_name' => 'British Columbia',
            ),
            67 => 
            array (
                'zone_id' => 68,
                'zone_country_id' => 38,
                'zone_code' => 'MB',
                'zone_name' => 'Manitoba',
            ),
            68 => 
            array (
                'zone_id' => 69,
                'zone_country_id' => 38,
                'zone_code' => 'NF',
                'zone_name' => 'Newfoundland',
            ),
            69 => 
            array (
                'zone_id' => 70,
                'zone_country_id' => 38,
                'zone_code' => 'NB',
                'zone_name' => 'New Brunswick',
            ),
            70 => 
            array (
                'zone_id' => 71,
                'zone_country_id' => 38,
                'zone_code' => 'NS',
                'zone_name' => 'Nova Scotia',
            ),
            71 => 
            array (
                'zone_id' => 72,
                'zone_country_id' => 38,
                'zone_code' => 'NT',
                'zone_name' => 'Northwest Territories',
            ),
            72 => 
            array (
                'zone_id' => 73,
                'zone_country_id' => 38,
                'zone_code' => 'NU',
                'zone_name' => 'Nunavut',
            ),
            73 => 
            array (
                'zone_id' => 74,
                'zone_country_id' => 38,
                'zone_code' => 'ON',
                'zone_name' => 'Ontario',
            ),
            74 => 
            array (
                'zone_id' => 75,
                'zone_country_id' => 38,
                'zone_code' => 'PE',
                'zone_name' => 'Prince Edward Island',
            ),
            75 => 
            array (
                'zone_id' => 76,
                'zone_country_id' => 38,
                'zone_code' => 'QC',
                'zone_name' => 'Quebec',
            ),
            76 => 
            array (
                'zone_id' => 77,
                'zone_country_id' => 38,
                'zone_code' => 'SK',
                'zone_name' => 'Saskatchewan',
            ),
            77 => 
            array (
                'zone_id' => 78,
                'zone_country_id' => 38,
                'zone_code' => 'YT',
                'zone_name' => 'Yukon Territory',
            ),
            78 => 
            array (
                'zone_id' => 79,
                'zone_country_id' => 81,
                'zone_code' => 'NDS',
                'zone_name' => 'Niedersachsen',
            ),
            79 => 
            array (
                'zone_id' => 80,
                'zone_country_id' => 81,
                'zone_code' => 'BAW',
                'zone_name' => 'Baden-Württemberg',
            ),
            80 => 
            array (
                'zone_id' => 81,
                'zone_country_id' => 81,
                'zone_code' => 'BAY',
                'zone_name' => 'Bayern',
            ),
            81 => 
            array (
                'zone_id' => 82,
                'zone_country_id' => 81,
                'zone_code' => 'BER',
                'zone_name' => 'Berlin',
            ),
            82 => 
            array (
                'zone_id' => 83,
                'zone_country_id' => 81,
                'zone_code' => 'BRG',
                'zone_name' => 'Brandenburg',
            ),
            83 => 
            array (
                'zone_id' => 84,
                'zone_country_id' => 81,
                'zone_code' => 'BRE',
                'zone_name' => 'Bremen',
            ),
            84 => 
            array (
                'zone_id' => 85,
                'zone_country_id' => 81,
                'zone_code' => 'HAM',
                'zone_name' => 'Hamburg',
            ),
            85 => 
            array (
                'zone_id' => 86,
                'zone_country_id' => 81,
                'zone_code' => 'HES',
                'zone_name' => 'Hessen',
            ),
            86 => 
            array (
                'zone_id' => 87,
                'zone_country_id' => 81,
                'zone_code' => 'MEC',
                'zone_name' => 'Mecklenburg-Vorpommern',
            ),
            87 => 
            array (
                'zone_id' => 88,
                'zone_country_id' => 81,
                'zone_code' => 'NRW',
                'zone_name' => 'Nordrhein-Westfalen',
            ),
            88 => 
            array (
                'zone_id' => 89,
                'zone_country_id' => 81,
                'zone_code' => 'RHE',
                'zone_name' => 'Rheinland-Pfalz',
            ),
            89 => 
            array (
                'zone_id' => 90,
                'zone_country_id' => 81,
                'zone_code' => 'SAR',
                'zone_name' => 'Saarland',
            ),
            90 => 
            array (
                'zone_id' => 91,
                'zone_country_id' => 81,
                'zone_code' => 'SAS',
                'zone_name' => 'Sachsen',
            ),
            91 => 
            array (
                'zone_id' => 92,
                'zone_country_id' => 81,
                'zone_code' => 'SAC',
                'zone_name' => 'Sachsen-Anhalt',
            ),
            92 => 
            array (
                'zone_id' => 93,
                'zone_country_id' => 81,
                'zone_code' => 'SCN',
                'zone_name' => 'Schleswig-Holstein',
            ),
            93 => 
            array (
                'zone_id' => 94,
                'zone_country_id' => 81,
                'zone_code' => 'THE',
                'zone_name' => 'Thüringen',
            ),
            94 => 
            array (
                'zone_id' => 95,
                'zone_country_id' => 14,
                'zone_code' => 'WI',
                'zone_name' => 'Wien',
            ),
            95 => 
            array (
                'zone_id' => 96,
                'zone_country_id' => 14,
                'zone_code' => 'NO',
                'zone_name' => 'Niederösterreich',
            ),
            96 => 
            array (
                'zone_id' => 97,
                'zone_country_id' => 14,
                'zone_code' => 'OO',
                'zone_name' => 'Oberösterreich',
            ),
            97 => 
            array (
                'zone_id' => 98,
                'zone_country_id' => 14,
                'zone_code' => 'SB',
                'zone_name' => 'Salzburg',
            ),
            98 => 
            array (
                'zone_id' => 99,
                'zone_country_id' => 14,
                'zone_code' => 'KN',
                'zone_name' => 'Kärnten',
            ),
            99 => 
            array (
                'zone_id' => 100,
                'zone_country_id' => 14,
                'zone_code' => 'ST',
                'zone_name' => 'Steiermark',
            ),
            100 => 
            array (
                'zone_id' => 101,
                'zone_country_id' => 14,
                'zone_code' => 'TI',
                'zone_name' => 'Tirol',
            ),
            101 => 
            array (
                'zone_id' => 102,
                'zone_country_id' => 14,
                'zone_code' => 'BL',
                'zone_name' => 'Burgenland',
            ),
            102 => 
            array (
                'zone_id' => 103,
                'zone_country_id' => 14,
                'zone_code' => 'VB',
                'zone_name' => 'Voralberg',
            ),
            103 => 
            array (
                'zone_id' => 104,
                'zone_country_id' => 204,
                'zone_code' => 'AG',
                'zone_name' => 'Aargau',
            ),
            104 => 
            array (
                'zone_id' => 105,
                'zone_country_id' => 204,
                'zone_code' => 'AI',
                'zone_name' => 'Appenzell Innerrhoden',
            ),
            105 => 
            array (
                'zone_id' => 106,
                'zone_country_id' => 204,
                'zone_code' => 'AR',
                'zone_name' => 'Appenzell Ausserrhoden',
            ),
            106 => 
            array (
                'zone_id' => 107,
                'zone_country_id' => 204,
                'zone_code' => 'BE',
                'zone_name' => 'Bern',
            ),
            107 => 
            array (
                'zone_id' => 108,
                'zone_country_id' => 204,
                'zone_code' => 'BL',
                'zone_name' => 'Basel-Landschaft',
            ),
            108 => 
            array (
                'zone_id' => 109,
                'zone_country_id' => 204,
                'zone_code' => 'BS',
                'zone_name' => 'Basel-Stadt',
            ),
            109 => 
            array (
                'zone_id' => 110,
                'zone_country_id' => 204,
                'zone_code' => 'FR',
                'zone_name' => 'Freiburg',
            ),
            110 => 
            array (
                'zone_id' => 111,
                'zone_country_id' => 204,
                'zone_code' => 'GE',
                'zone_name' => 'Genf',
            ),
            111 => 
            array (
                'zone_id' => 112,
                'zone_country_id' => 204,
                'zone_code' => 'GL',
                'zone_name' => 'Glarus',
            ),
            112 => 
            array (
                'zone_id' => 113,
                'zone_country_id' => 204,
                'zone_code' => 'JU',
                'zone_name' => 'Graubünden',
            ),
            113 => 
            array (
                'zone_id' => 114,
                'zone_country_id' => 204,
                'zone_code' => 'JU',
                'zone_name' => 'Jura',
            ),
            114 => 
            array (
                'zone_id' => 115,
                'zone_country_id' => 204,
                'zone_code' => 'LU',
                'zone_name' => 'Luzern',
            ),
            115 => 
            array (
                'zone_id' => 116,
                'zone_country_id' => 204,
                'zone_code' => 'NE',
                'zone_name' => 'Neuenburg',
            ),
            116 => 
            array (
                'zone_id' => 117,
                'zone_country_id' => 204,
                'zone_code' => 'NW',
                'zone_name' => 'Nidwalden',
            ),
            117 => 
            array (
                'zone_id' => 118,
                'zone_country_id' => 204,
                'zone_code' => 'OW',
                'zone_name' => 'Obwalden',
            ),
            118 => 
            array (
                'zone_id' => 119,
                'zone_country_id' => 204,
                'zone_code' => 'SG',
                'zone_name' => 'St. Gallen',
            ),
            119 => 
            array (
                'zone_id' => 120,
                'zone_country_id' => 204,
                'zone_code' => 'SH',
                'zone_name' => 'Schaffhausen',
            ),
            120 => 
            array (
                'zone_id' => 121,
                'zone_country_id' => 204,
                'zone_code' => 'SO',
                'zone_name' => 'Solothurn',
            ),
            121 => 
            array (
                'zone_id' => 122,
                'zone_country_id' => 204,
                'zone_code' => 'SZ',
                'zone_name' => 'Schwyz',
            ),
            122 => 
            array (
                'zone_id' => 123,
                'zone_country_id' => 204,
                'zone_code' => 'TG',
                'zone_name' => 'Thurgau',
            ),
            123 => 
            array (
                'zone_id' => 124,
                'zone_country_id' => 204,
                'zone_code' => 'TI',
                'zone_name' => 'Tessin',
            ),
            124 => 
            array (
                'zone_id' => 125,
                'zone_country_id' => 204,
                'zone_code' => 'UR',
                'zone_name' => 'Uri',
            ),
            125 => 
            array (
                'zone_id' => 126,
                'zone_country_id' => 204,
                'zone_code' => 'VD',
                'zone_name' => 'Waadt',
            ),
            126 => 
            array (
                'zone_id' => 127,
                'zone_country_id' => 204,
                'zone_code' => 'VS',
                'zone_name' => 'Wallis',
            ),
            127 => 
            array (
                'zone_id' => 128,
                'zone_country_id' => 204,
                'zone_code' => 'ZG',
                'zone_name' => 'Zug',
            ),
            128 => 
            array (
                'zone_id' => 129,
                'zone_country_id' => 204,
                'zone_code' => 'ZH',
                'zone_name' => 'Zürich',
            ),
            129 => 
            array (
                'zone_id' => 130,
                'zone_country_id' => 195,
                'zone_code' => 'A Coruña',
                'zone_name' => 'A Coruña',
            ),
            130 => 
            array (
                'zone_id' => 131,
                'zone_country_id' => 195,
                'zone_code' => 'Alava',
                'zone_name' => 'Alava',
            ),
            131 => 
            array (
                'zone_id' => 132,
                'zone_country_id' => 195,
                'zone_code' => 'Albacete',
                'zone_name' => 'Albacete',
            ),
            132 => 
            array (
                'zone_id' => 133,
                'zone_country_id' => 195,
                'zone_code' => 'Alicante',
                'zone_name' => 'Alicante',
            ),
            133 => 
            array (
                'zone_id' => 134,
                'zone_country_id' => 195,
                'zone_code' => 'Almeria',
                'zone_name' => 'Almeria',
            ),
            134 => 
            array (
                'zone_id' => 135,
                'zone_country_id' => 195,
                'zone_code' => 'Asturias',
                'zone_name' => 'Asturias',
            ),
            135 => 
            array (
                'zone_id' => 136,
                'zone_country_id' => 195,
                'zone_code' => 'Avila',
                'zone_name' => 'Avila',
            ),
            136 => 
            array (
                'zone_id' => 137,
                'zone_country_id' => 195,
                'zone_code' => 'Badajoz',
                'zone_name' => 'Badajoz',
            ),
            137 => 
            array (
                'zone_id' => 138,
                'zone_country_id' => 195,
                'zone_code' => 'Baleares',
                'zone_name' => 'Baleares',
            ),
            138 => 
            array (
                'zone_id' => 139,
                'zone_country_id' => 195,
                'zone_code' => 'Barcelona',
                'zone_name' => 'Barcelona',
            ),
            139 => 
            array (
                'zone_id' => 140,
                'zone_country_id' => 195,
                'zone_code' => 'Burgos',
                'zone_name' => 'Burgos',
            ),
            140 => 
            array (
                'zone_id' => 141,
                'zone_country_id' => 195,
                'zone_code' => 'Caceres',
                'zone_name' => 'Caceres',
            ),
            141 => 
            array (
                'zone_id' => 142,
                'zone_country_id' => 195,
                'zone_code' => 'Cadiz',
                'zone_name' => 'Cadiz',
            ),
            142 => 
            array (
                'zone_id' => 143,
                'zone_country_id' => 195,
                'zone_code' => 'Cantabria',
                'zone_name' => 'Cantabria',
            ),
            143 => 
            array (
                'zone_id' => 144,
                'zone_country_id' => 195,
                'zone_code' => 'Castellon',
                'zone_name' => 'Castellon',
            ),
            144 => 
            array (
                'zone_id' => 145,
                'zone_country_id' => 195,
                'zone_code' => 'Ceuta',
                'zone_name' => 'Ceuta',
            ),
            145 => 
            array (
                'zone_id' => 146,
                'zone_country_id' => 195,
                'zone_code' => 'Ciudad Real',
                'zone_name' => 'Ciudad Real',
            ),
            146 => 
            array (
                'zone_id' => 147,
                'zone_country_id' => 195,
                'zone_code' => 'Cordoba',
                'zone_name' => 'Cordoba',
            ),
            147 => 
            array (
                'zone_id' => 148,
                'zone_country_id' => 195,
                'zone_code' => 'Cuenca',
                'zone_name' => 'Cuenca',
            ),
            148 => 
            array (
                'zone_id' => 149,
                'zone_country_id' => 195,
                'zone_code' => 'Girona',
                'zone_name' => 'Girona',
            ),
            149 => 
            array (
                'zone_id' => 150,
                'zone_country_id' => 195,
                'zone_code' => 'Granada',
                'zone_name' => 'Granada',
            ),
            150 => 
            array (
                'zone_id' => 151,
                'zone_country_id' => 195,
                'zone_code' => 'Guadalajara',
                'zone_name' => 'Guadalajara',
            ),
            151 => 
            array (
                'zone_id' => 152,
                'zone_country_id' => 195,
                'zone_code' => 'Guipuzcoa',
                'zone_name' => 'Guipuzcoa',
            ),
            152 => 
            array (
                'zone_id' => 153,
                'zone_country_id' => 195,
                'zone_code' => 'Huelva',
                'zone_name' => 'Huelva',
            ),
            153 => 
            array (
                'zone_id' => 154,
                'zone_country_id' => 195,
                'zone_code' => 'Huesca',
                'zone_name' => 'Huesca',
            ),
            154 => 
            array (
                'zone_id' => 155,
                'zone_country_id' => 195,
                'zone_code' => 'Jaen',
                'zone_name' => 'Jaen',
            ),
            155 => 
            array (
                'zone_id' => 156,
                'zone_country_id' => 195,
                'zone_code' => 'La Rioja',
                'zone_name' => 'La Rioja',
            ),
            156 => 
            array (
                'zone_id' => 157,
                'zone_country_id' => 195,
                'zone_code' => 'Las Palmas',
                'zone_name' => 'Las Palmas',
            ),
            157 => 
            array (
                'zone_id' => 158,
                'zone_country_id' => 195,
                'zone_code' => 'Leon',
                'zone_name' => 'Leon',
            ),
            158 => 
            array (
                'zone_id' => 159,
                'zone_country_id' => 195,
                'zone_code' => 'Lleida',
                'zone_name' => 'Lleida',
            ),
            159 => 
            array (
                'zone_id' => 160,
                'zone_country_id' => 195,
                'zone_code' => 'Lugo',
                'zone_name' => 'Lugo',
            ),
            160 => 
            array (
                'zone_id' => 161,
                'zone_country_id' => 195,
                'zone_code' => 'Madrid',
                'zone_name' => 'Madrid',
            ),
            161 => 
            array (
                'zone_id' => 162,
                'zone_country_id' => 195,
                'zone_code' => 'Malaga',
                'zone_name' => 'Malaga',
            ),
            162 => 
            array (
                'zone_id' => 163,
                'zone_country_id' => 195,
                'zone_code' => 'Melilla',
                'zone_name' => 'Melilla',
            ),
            163 => 
            array (
                'zone_id' => 164,
                'zone_country_id' => 195,
                'zone_code' => 'Murcia',
                'zone_name' => 'Murcia',
            ),
            164 => 
            array (
                'zone_id' => 165,
                'zone_country_id' => 195,
                'zone_code' => 'Navarra',
                'zone_name' => 'Navarra',
            ),
            165 => 
            array (
                'zone_id' => 166,
                'zone_country_id' => 195,
                'zone_code' => 'Ourense',
                'zone_name' => 'Ourense',
            ),
            166 => 
            array (
                'zone_id' => 167,
                'zone_country_id' => 195,
                'zone_code' => 'Palencia',
                'zone_name' => 'Palencia',
            ),
            167 => 
            array (
                'zone_id' => 168,
                'zone_country_id' => 195,
                'zone_code' => 'Pontevedra',
                'zone_name' => 'Pontevedra',
            ),
            168 => 
            array (
                'zone_id' => 169,
                'zone_country_id' => 195,
                'zone_code' => 'Salamanca',
                'zone_name' => 'Salamanca',
            ),
            169 => 
            array (
                'zone_id' => 170,
                'zone_country_id' => 195,
                'zone_code' => 'Santa Cruz de Tenerife',
                'zone_name' => 'Santa Cruz de Tenerife',
            ),
            170 => 
            array (
                'zone_id' => 171,
                'zone_country_id' => 195,
                'zone_code' => 'Segovia',
                'zone_name' => 'Segovia',
            ),
            171 => 
            array (
                'zone_id' => 172,
                'zone_country_id' => 195,
                'zone_code' => 'Sevilla',
                'zone_name' => 'Sevilla',
            ),
            172 => 
            array (
                'zone_id' => 173,
                'zone_country_id' => 195,
                'zone_code' => 'Soria',
                'zone_name' => 'Soria',
            ),
            173 => 
            array (
                'zone_id' => 174,
                'zone_country_id' => 195,
                'zone_code' => 'Tarragona',
                'zone_name' => 'Tarragona',
            ),
            174 => 
            array (
                'zone_id' => 175,
                'zone_country_id' => 195,
                'zone_code' => 'Teruel',
                'zone_name' => 'Teruel',
            ),
            175 => 
            array (
                'zone_id' => 176,
                'zone_country_id' => 195,
                'zone_code' => 'Toledo',
                'zone_name' => 'Toledo',
            ),
            176 => 
            array (
                'zone_id' => 177,
                'zone_country_id' => 195,
                'zone_code' => 'Valencia',
                'zone_name' => 'Valencia',
            ),
            177 => 
            array (
                'zone_id' => 178,
                'zone_country_id' => 195,
                'zone_code' => 'Valladolid',
                'zone_name' => 'Valladolid',
            ),
            178 => 
            array (
                'zone_id' => 179,
                'zone_country_id' => 195,
                'zone_code' => 'Vizcaya',
                'zone_name' => 'Vizcaya',
            ),
            179 => 
            array (
                'zone_id' => 180,
                'zone_country_id' => 195,
                'zone_code' => 'Zamora',
                'zone_name' => 'Zamora',
            ),
            180 => 
            array (
                'zone_id' => 181,
                'zone_country_id' => 195,
                'zone_code' => 'Zaragoza',
                'zone_name' => 'Zaragoza',
            ),
        ));
        
        
    }
}