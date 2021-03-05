<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'countries_id' => 1,
                'countries_name' => 'Afghanistan',
                'countries_iso_code_2' => 'AF',
                'countries_iso_code_3' => 'AFG',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            1 => 
            array (
                'countries_id' => 2,
                'countries_name' => 'Albania',
                'countries_iso_code_2' => 'AL',
                'countries_iso_code_3' => 'ALB',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            2 => 
            array (
                'countries_id' => 3,
                'countries_name' => 'Algeria',
                'countries_iso_code_2' => 'DZ',
                'countries_iso_code_3' => 'DZA',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            3 => 
            array (
                'countries_id' => 4,
                'countries_name' => 'American Samoa',
                'countries_iso_code_2' => 'AS',
                'countries_iso_code_3' => 'ASM',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            4 => 
            array (
                'countries_id' => 5,
                'countries_name' => 'Andorra',
                'countries_iso_code_2' => 'AD',
                'countries_iso_code_3' => 'AND',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            5 => 
            array (
                'countries_id' => 6,
                'countries_name' => 'Angola',
                'countries_iso_code_2' => 'AO',
                'countries_iso_code_3' => 'AGO',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            6 => 
            array (
                'countries_id' => 7,
                'countries_name' => 'Anguilla',
                'countries_iso_code_2' => 'AI',
                'countries_iso_code_3' => 'AIA',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            7 => 
            array (
                'countries_id' => 8,
                'countries_name' => 'Antarctica',
                'countries_iso_code_2' => 'AQ',
                'countries_iso_code_3' => 'ATA',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            8 => 
            array (
                'countries_id' => 9,
                'countries_name' => 'Antigua and Barbuda',
                'countries_iso_code_2' => 'AG',
                'countries_iso_code_3' => 'ATG',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            9 => 
            array (
                'countries_id' => 10,
                'countries_name' => 'Argentina',
                'countries_iso_code_2' => 'AR',
                'countries_iso_code_3' => 'ARG',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            10 => 
            array (
                'countries_id' => 11,
                'countries_name' => 'Armenia',
                'countries_iso_code_2' => 'AM',
                'countries_iso_code_3' => 'ARM',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            11 => 
            array (
                'countries_id' => 12,
                'countries_name' => 'Aruba',
                'countries_iso_code_2' => 'AW',
                'countries_iso_code_3' => 'ABW',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            12 => 
            array (
                'countries_id' => 13,
                'countries_name' => 'Australia',
                'countries_iso_code_2' => 'AU',
                'countries_iso_code_3' => 'AUS',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            13 => 
            array (
                'countries_id' => 14,
                'countries_name' => 'Austria',
                'countries_iso_code_2' => 'AT',
                'countries_iso_code_3' => 'AUT',
                'address_format_id' => 5,
                'country_code' => NULL,
            ),
            14 => 
            array (
                'countries_id' => 15,
                'countries_name' => 'Azerbaijan',
                'countries_iso_code_2' => 'AZ',
                'countries_iso_code_3' => 'AZE',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            15 => 
            array (
                'countries_id' => 16,
                'countries_name' => 'Bahamas',
                'countries_iso_code_2' => 'BS',
                'countries_iso_code_3' => 'BHS',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            16 => 
            array (
                'countries_id' => 17,
                'countries_name' => 'Bahrain',
                'countries_iso_code_2' => 'BH',
                'countries_iso_code_3' => 'BHR',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            17 => 
            array (
                'countries_id' => 18,
                'countries_name' => 'Bangladesh',
                'countries_iso_code_2' => 'BD',
                'countries_iso_code_3' => 'BGD',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            18 => 
            array (
                'countries_id' => 19,
                'countries_name' => 'Barbados',
                'countries_iso_code_2' => 'BB',
                'countries_iso_code_3' => 'BRB',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            19 => 
            array (
                'countries_id' => 20,
                'countries_name' => 'Belarus',
                'countries_iso_code_2' => 'BY',
                'countries_iso_code_3' => 'BLR',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            20 => 
            array (
                'countries_id' => 21,
                'countries_name' => 'Belgium',
                'countries_iso_code_2' => 'BE',
                'countries_iso_code_3' => 'BEL',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            21 => 
            array (
                'countries_id' => 22,
                'countries_name' => 'Belize',
                'countries_iso_code_2' => 'BZ',
                'countries_iso_code_3' => 'BLZ',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            22 => 
            array (
                'countries_id' => 23,
                'countries_name' => 'Benin',
                'countries_iso_code_2' => 'BJ',
                'countries_iso_code_3' => 'BEN',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            23 => 
            array (
                'countries_id' => 24,
                'countries_name' => 'Bermuda',
                'countries_iso_code_2' => 'BM',
                'countries_iso_code_3' => 'BMU',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            24 => 
            array (
                'countries_id' => 25,
                'countries_name' => 'Bhutan',
                'countries_iso_code_2' => 'BT',
                'countries_iso_code_3' => 'BTN',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            25 => 
            array (
                'countries_id' => 26,
                'countries_name' => 'Bolivia',
                'countries_iso_code_2' => 'BO',
                'countries_iso_code_3' => 'BOL',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            26 => 
            array (
                'countries_id' => 27,
                'countries_name' => 'Bosnia and Herzegowina',
                'countries_iso_code_2' => 'BA',
                'countries_iso_code_3' => 'BIH',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            27 => 
            array (
                'countries_id' => 28,
                'countries_name' => 'Botswana',
                'countries_iso_code_2' => 'BW',
                'countries_iso_code_3' => 'BWA',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            28 => 
            array (
                'countries_id' => 29,
                'countries_name' => 'Bouvet Island',
                'countries_iso_code_2' => 'BV',
                'countries_iso_code_3' => 'BVT',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            29 => 
            array (
                'countries_id' => 30,
                'countries_name' => 'Brazil',
                'countries_iso_code_2' => 'BR',
                'countries_iso_code_3' => 'BRA',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            30 => 
            array (
                'countries_id' => 31,
                'countries_name' => 'British Indian Ocean Territory',
                'countries_iso_code_2' => 'IO',
                'countries_iso_code_3' => 'IOT',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            31 => 
            array (
                'countries_id' => 32,
                'countries_name' => 'Brunei Darussalam',
                'countries_iso_code_2' => 'BN',
                'countries_iso_code_3' => 'BRN',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            32 => 
            array (
                'countries_id' => 33,
                'countries_name' => 'Bulgaria',
                'countries_iso_code_2' => 'BG',
                'countries_iso_code_3' => 'BGR',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            33 => 
            array (
                'countries_id' => 34,
                'countries_name' => 'Burkina Faso',
                'countries_iso_code_2' => 'BF',
                'countries_iso_code_3' => 'BFA',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            34 => 
            array (
                'countries_id' => 35,
                'countries_name' => 'Burundi',
                'countries_iso_code_2' => 'BI',
                'countries_iso_code_3' => 'BDI',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            35 => 
            array (
                'countries_id' => 36,
                'countries_name' => 'Cambodia',
                'countries_iso_code_2' => 'KH',
                'countries_iso_code_3' => 'KHM',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            36 => 
            array (
                'countries_id' => 37,
                'countries_name' => 'Cameroon',
                'countries_iso_code_2' => 'CM',
                'countries_iso_code_3' => 'CMR',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            37 => 
            array (
                'countries_id' => 38,
                'countries_name' => 'Canada',
                'countries_iso_code_2' => 'CA',
                'countries_iso_code_3' => 'CAN',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            38 => 
            array (
                'countries_id' => 39,
                'countries_name' => 'Cape Verde',
                'countries_iso_code_2' => 'CV',
                'countries_iso_code_3' => 'CPV',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            39 => 
            array (
                'countries_id' => 40,
                'countries_name' => 'Cayman Islands',
                'countries_iso_code_2' => 'KY',
                'countries_iso_code_3' => 'CYM',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            40 => 
            array (
                'countries_id' => 41,
                'countries_name' => 'Central African Republic',
                'countries_iso_code_2' => 'CF',
                'countries_iso_code_3' => 'CAF',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            41 => 
            array (
                'countries_id' => 42,
                'countries_name' => 'Chad',
                'countries_iso_code_2' => 'TD',
                'countries_iso_code_3' => 'TCD',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            42 => 
            array (
                'countries_id' => 43,
                'countries_name' => 'Chile',
                'countries_iso_code_2' => 'CL',
                'countries_iso_code_3' => 'CHL',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            43 => 
            array (
                'countries_id' => 44,
                'countries_name' => 'China',
                'countries_iso_code_2' => 'CN',
                'countries_iso_code_3' => 'CHN',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            44 => 
            array (
                'countries_id' => 45,
                'countries_name' => 'Christmas Island',
                'countries_iso_code_2' => 'CX',
                'countries_iso_code_3' => 'CXR',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            45 => 
            array (
                'countries_id' => 46,
            'countries_name' => 'Cocos (Keeling) Islands',
                'countries_iso_code_2' => 'CC',
                'countries_iso_code_3' => 'CCK',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            46 => 
            array (
                'countries_id' => 47,
                'countries_name' => 'Colombia',
                'countries_iso_code_2' => 'CO',
                'countries_iso_code_3' => 'COL',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            47 => 
            array (
                'countries_id' => 48,
                'countries_name' => 'Comoros',
                'countries_iso_code_2' => 'KM',
                'countries_iso_code_3' => 'COM',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            48 => 
            array (
                'countries_id' => 49,
                'countries_name' => 'Congo',
                'countries_iso_code_2' => 'CG',
                'countries_iso_code_3' => 'COG',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            49 => 
            array (
                'countries_id' => 50,
                'countries_name' => 'Cook Islands',
                'countries_iso_code_2' => 'CK',
                'countries_iso_code_3' => 'COK',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            50 => 
            array (
                'countries_id' => 51,
                'countries_name' => 'Costa Rica',
                'countries_iso_code_2' => 'CR',
                'countries_iso_code_3' => 'CRI',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            51 => 
            array (
                'countries_id' => 52,
                'countries_name' => 'Cote D\'Ivoire',
                'countries_iso_code_2' => 'CI',
                'countries_iso_code_3' => 'CIV',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            52 => 
            array (
                'countries_id' => 53,
                'countries_name' => 'Croatia',
                'countries_iso_code_2' => 'HR',
                'countries_iso_code_3' => 'HRV',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            53 => 
            array (
                'countries_id' => 54,
                'countries_name' => 'Cuba',
                'countries_iso_code_2' => 'CU',
                'countries_iso_code_3' => 'CUB',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            54 => 
            array (
                'countries_id' => 55,
                'countries_name' => 'Cyprus',
                'countries_iso_code_2' => 'CY',
                'countries_iso_code_3' => 'CYP',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            55 => 
            array (
                'countries_id' => 56,
                'countries_name' => 'Czech Republic',
                'countries_iso_code_2' => 'CZ',
                'countries_iso_code_3' => 'CZE',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            56 => 
            array (
                'countries_id' => 57,
                'countries_name' => 'Denmark',
                'countries_iso_code_2' => 'DK',
                'countries_iso_code_3' => 'DNK',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            57 => 
            array (
                'countries_id' => 58,
                'countries_name' => 'Djibouti',
                'countries_iso_code_2' => 'DJ',
                'countries_iso_code_3' => 'DJI',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            58 => 
            array (
                'countries_id' => 59,
                'countries_name' => 'Dominica',
                'countries_iso_code_2' => 'DM',
                'countries_iso_code_3' => 'DMA',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            59 => 
            array (
                'countries_id' => 60,
                'countries_name' => 'Dominican Republic',
                'countries_iso_code_2' => 'DO',
                'countries_iso_code_3' => 'DOM',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            60 => 
            array (
                'countries_id' => 61,
                'countries_name' => 'East Timor',
                'countries_iso_code_2' => 'TP',
                'countries_iso_code_3' => 'TMP',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            61 => 
            array (
                'countries_id' => 62,
                'countries_name' => 'Ecuador',
                'countries_iso_code_2' => 'EC',
                'countries_iso_code_3' => 'ECU',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            62 => 
            array (
                'countries_id' => 63,
                'countries_name' => 'Egypt',
                'countries_iso_code_2' => 'EG',
                'countries_iso_code_3' => 'EGY',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            63 => 
            array (
                'countries_id' => 64,
                'countries_name' => 'El Salvador',
                'countries_iso_code_2' => 'SV',
                'countries_iso_code_3' => 'SLV',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            64 => 
            array (
                'countries_id' => 65,
                'countries_name' => 'Equatorial Guinea',
                'countries_iso_code_2' => 'GQ',
                'countries_iso_code_3' => 'GNQ',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            65 => 
            array (
                'countries_id' => 66,
                'countries_name' => 'Eritrea',
                'countries_iso_code_2' => 'ER',
                'countries_iso_code_3' => 'ERI',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            66 => 
            array (
                'countries_id' => 67,
                'countries_name' => 'Estonia',
                'countries_iso_code_2' => 'EE',
                'countries_iso_code_3' => 'EST',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            67 => 
            array (
                'countries_id' => 68,
                'countries_name' => 'Ethiopia',
                'countries_iso_code_2' => 'ET',
                'countries_iso_code_3' => 'ETH',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            68 => 
            array (
                'countries_id' => 69,
            'countries_name' => 'Falkland Islands (Malvinas)',
                'countries_iso_code_2' => 'FK',
                'countries_iso_code_3' => 'FLK',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            69 => 
            array (
                'countries_id' => 70,
                'countries_name' => 'Faroe Islands',
                'countries_iso_code_2' => 'FO',
                'countries_iso_code_3' => 'FRO',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            70 => 
            array (
                'countries_id' => 71,
                'countries_name' => 'Fiji',
                'countries_iso_code_2' => 'FJ',
                'countries_iso_code_3' => 'FJI',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            71 => 
            array (
                'countries_id' => 72,
                'countries_name' => 'Finland',
                'countries_iso_code_2' => 'FI',
                'countries_iso_code_3' => 'FIN',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            72 => 
            array (
                'countries_id' => 73,
                'countries_name' => 'France',
                'countries_iso_code_2' => 'FR',
                'countries_iso_code_3' => 'FRA',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            73 => 
            array (
                'countries_id' => 74,
                'countries_name' => 'France, Metropolitan',
                'countries_iso_code_2' => 'FX',
                'countries_iso_code_3' => 'FXX',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            74 => 
            array (
                'countries_id' => 75,
                'countries_name' => 'French Guiana',
                'countries_iso_code_2' => 'GF',
                'countries_iso_code_3' => 'GUF',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            75 => 
            array (
                'countries_id' => 76,
                'countries_name' => 'French Polynesia',
                'countries_iso_code_2' => 'PF',
                'countries_iso_code_3' => 'PYF',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            76 => 
            array (
                'countries_id' => 77,
                'countries_name' => 'French Southern Territories',
                'countries_iso_code_2' => 'TF',
                'countries_iso_code_3' => 'ATF',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            77 => 
            array (
                'countries_id' => 78,
                'countries_name' => 'Gabon',
                'countries_iso_code_2' => 'GA',
                'countries_iso_code_3' => 'GAB',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            78 => 
            array (
                'countries_id' => 79,
                'countries_name' => 'Gambia',
                'countries_iso_code_2' => 'GM',
                'countries_iso_code_3' => 'GMB',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            79 => 
            array (
                'countries_id' => 80,
                'countries_name' => 'Georgia',
                'countries_iso_code_2' => 'GE',
                'countries_iso_code_3' => 'GEO',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            80 => 
            array (
                'countries_id' => 81,
                'countries_name' => 'Germany',
                'countries_iso_code_2' => 'DE',
                'countries_iso_code_3' => 'DEU',
                'address_format_id' => 5,
                'country_code' => NULL,
            ),
            81 => 
            array (
                'countries_id' => 82,
                'countries_name' => 'Ghana',
                'countries_iso_code_2' => 'GH',
                'countries_iso_code_3' => 'GHA',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            82 => 
            array (
                'countries_id' => 83,
                'countries_name' => 'Gibraltar',
                'countries_iso_code_2' => 'GI',
                'countries_iso_code_3' => 'GIB',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            83 => 
            array (
                'countries_id' => 84,
                'countries_name' => 'Greece',
                'countries_iso_code_2' => 'GR',
                'countries_iso_code_3' => 'GRC',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            84 => 
            array (
                'countries_id' => 85,
                'countries_name' => 'Greenland',
                'countries_iso_code_2' => 'GL',
                'countries_iso_code_3' => 'GRL',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            85 => 
            array (
                'countries_id' => 86,
                'countries_name' => 'Grenada',
                'countries_iso_code_2' => 'GD',
                'countries_iso_code_3' => 'GRD',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            86 => 
            array (
                'countries_id' => 87,
                'countries_name' => 'Guadeloupe',
                'countries_iso_code_2' => 'GP',
                'countries_iso_code_3' => 'GLP',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            87 => 
            array (
                'countries_id' => 88,
                'countries_name' => 'Guam',
                'countries_iso_code_2' => 'GU',
                'countries_iso_code_3' => 'GUM',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            88 => 
            array (
                'countries_id' => 89,
                'countries_name' => 'Guatemala',
                'countries_iso_code_2' => 'GT',
                'countries_iso_code_3' => 'GTM',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            89 => 
            array (
                'countries_id' => 90,
                'countries_name' => 'Guinea',
                'countries_iso_code_2' => 'GN',
                'countries_iso_code_3' => 'GIN',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            90 => 
            array (
                'countries_id' => 91,
                'countries_name' => 'Guinea-bissau',
                'countries_iso_code_2' => 'GW',
                'countries_iso_code_3' => 'GNB',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            91 => 
            array (
                'countries_id' => 92,
                'countries_name' => 'Guyana',
                'countries_iso_code_2' => 'GY',
                'countries_iso_code_3' => 'GUY',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            92 => 
            array (
                'countries_id' => 93,
                'countries_name' => 'Haiti',
                'countries_iso_code_2' => 'HT',
                'countries_iso_code_3' => 'HTI',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            93 => 
            array (
                'countries_id' => 94,
                'countries_name' => 'Heard and Mc Donald Islands',
                'countries_iso_code_2' => 'HM',
                'countries_iso_code_3' => 'HMD',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            94 => 
            array (
                'countries_id' => 95,
                'countries_name' => 'Honduras',
                'countries_iso_code_2' => 'HN',
                'countries_iso_code_3' => 'HND',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            95 => 
            array (
                'countries_id' => 96,
                'countries_name' => 'Hong Kong',
                'countries_iso_code_2' => 'HK',
                'countries_iso_code_3' => 'HKG',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            96 => 
            array (
                'countries_id' => 97,
                'countries_name' => 'Hungary',
                'countries_iso_code_2' => 'HU',
                'countries_iso_code_3' => 'HUN',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            97 => 
            array (
                'countries_id' => 98,
                'countries_name' => 'Iceland',
                'countries_iso_code_2' => 'IS',
                'countries_iso_code_3' => 'ISL',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            98 => 
            array (
                'countries_id' => 99,
                'countries_name' => 'India',
                'countries_iso_code_2' => 'IN',
                'countries_iso_code_3' => 'IND',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            99 => 
            array (
                'countries_id' => 100,
                'countries_name' => 'Indonesia',
                'countries_iso_code_2' => 'ID',
                'countries_iso_code_3' => 'IDN',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            100 => 
            array (
                'countries_id' => 101,
            'countries_name' => 'Iran (Islamic Republic of)',
                'countries_iso_code_2' => 'IR',
                'countries_iso_code_3' => 'IRN',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            101 => 
            array (
                'countries_id' => 102,
                'countries_name' => 'Iraq',
                'countries_iso_code_2' => 'IQ',
                'countries_iso_code_3' => 'IRQ',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            102 => 
            array (
                'countries_id' => 103,
                'countries_name' => 'Ireland',
                'countries_iso_code_2' => 'IE',
                'countries_iso_code_3' => 'IRL',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            103 => 
            array (
                'countries_id' => 104,
                'countries_name' => 'Israel',
                'countries_iso_code_2' => 'IL',
                'countries_iso_code_3' => 'ISR',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            104 => 
            array (
                'countries_id' => 105,
                'countries_name' => 'Italy',
                'countries_iso_code_2' => 'IT',
                'countries_iso_code_3' => 'ITA',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            105 => 
            array (
                'countries_id' => 106,
                'countries_name' => 'Jamaica',
                'countries_iso_code_2' => 'JM',
                'countries_iso_code_3' => 'JAM',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            106 => 
            array (
                'countries_id' => 107,
                'countries_name' => 'Japan',
                'countries_iso_code_2' => 'JP',
                'countries_iso_code_3' => 'JPN',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            107 => 
            array (
                'countries_id' => 108,
                'countries_name' => 'Jordan',
                'countries_iso_code_2' => 'JO',
                'countries_iso_code_3' => 'JOR',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            108 => 
            array (
                'countries_id' => 109,
                'countries_name' => 'Kazakhstan',
                'countries_iso_code_2' => 'KZ',
                'countries_iso_code_3' => 'KAZ',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            109 => 
            array (
                'countries_id' => 110,
                'countries_name' => 'Kenya',
                'countries_iso_code_2' => 'KE',
                'countries_iso_code_3' => 'KEN',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            110 => 
            array (
                'countries_id' => 111,
                'countries_name' => 'Kiribati',
                'countries_iso_code_2' => 'KI',
                'countries_iso_code_3' => 'KIR',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            111 => 
            array (
                'countries_id' => 112,
                'countries_name' => 'Korea, Democratic People\'s Republic of',
                'countries_iso_code_2' => 'KP',
                'countries_iso_code_3' => 'PRK',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            112 => 
            array (
                'countries_id' => 113,
                'countries_name' => 'Korea, Republic of',
                'countries_iso_code_2' => 'KR',
                'countries_iso_code_3' => 'KOR',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            113 => 
            array (
                'countries_id' => 114,
                'countries_name' => 'Kuwait',
                'countries_iso_code_2' => 'KW',
                'countries_iso_code_3' => 'KWT',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            114 => 
            array (
                'countries_id' => 115,
                'countries_name' => 'Kyrgyzstan',
                'countries_iso_code_2' => 'KG',
                'countries_iso_code_3' => 'KGZ',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            115 => 
            array (
                'countries_id' => 116,
                'countries_name' => 'Lao People\'s Democratic Republic',
                'countries_iso_code_2' => 'LA',
                'countries_iso_code_3' => 'LAO',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            116 => 
            array (
                'countries_id' => 117,
                'countries_name' => 'Latvia',
                'countries_iso_code_2' => 'LV',
                'countries_iso_code_3' => 'LVA',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            117 => 
            array (
                'countries_id' => 118,
                'countries_name' => 'Lebanon',
                'countries_iso_code_2' => 'LB',
                'countries_iso_code_3' => 'LBN',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            118 => 
            array (
                'countries_id' => 119,
                'countries_name' => 'Lesotho',
                'countries_iso_code_2' => 'LS',
                'countries_iso_code_3' => 'LSO',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            119 => 
            array (
                'countries_id' => 120,
                'countries_name' => 'Liberia',
                'countries_iso_code_2' => 'LR',
                'countries_iso_code_3' => 'LBR',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            120 => 
            array (
                'countries_id' => 121,
                'countries_name' => 'Libyan Arab Jamahiriya',
                'countries_iso_code_2' => 'LY',
                'countries_iso_code_3' => 'LBY',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            121 => 
            array (
                'countries_id' => 122,
                'countries_name' => 'Liechtenstein',
                'countries_iso_code_2' => 'LI',
                'countries_iso_code_3' => 'LIE',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            122 => 
            array (
                'countries_id' => 123,
                'countries_name' => 'Lithuania',
                'countries_iso_code_2' => 'LT',
                'countries_iso_code_3' => 'LTU',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            123 => 
            array (
                'countries_id' => 124,
                'countries_name' => 'Luxembourg',
                'countries_iso_code_2' => 'LU',
                'countries_iso_code_3' => 'LUX',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            124 => 
            array (
                'countries_id' => 125,
                'countries_name' => 'Macau',
                'countries_iso_code_2' => 'MO',
                'countries_iso_code_3' => 'MAC',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            125 => 
            array (
                'countries_id' => 126,
                'countries_name' => 'Macedonia, The Former Yugoslav Republic of',
                'countries_iso_code_2' => 'MK',
                'countries_iso_code_3' => 'MKD',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            126 => 
            array (
                'countries_id' => 127,
                'countries_name' => 'Madagascar',
                'countries_iso_code_2' => 'MG',
                'countries_iso_code_3' => 'MDG',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            127 => 
            array (
                'countries_id' => 128,
                'countries_name' => 'Malawi',
                'countries_iso_code_2' => 'MW',
                'countries_iso_code_3' => 'MWI',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            128 => 
            array (
                'countries_id' => 129,
                'countries_name' => 'Malaysia',
                'countries_iso_code_2' => 'MY',
                'countries_iso_code_3' => 'MYS',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            129 => 
            array (
                'countries_id' => 130,
                'countries_name' => 'Maldives',
                'countries_iso_code_2' => 'MV',
                'countries_iso_code_3' => 'MDV',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            130 => 
            array (
                'countries_id' => 131,
                'countries_name' => 'Mali',
                'countries_iso_code_2' => 'ML',
                'countries_iso_code_3' => 'MLI',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            131 => 
            array (
                'countries_id' => 132,
                'countries_name' => 'Malta',
                'countries_iso_code_2' => 'MT',
                'countries_iso_code_3' => 'MLT',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            132 => 
            array (
                'countries_id' => 133,
                'countries_name' => 'Marshall Islands',
                'countries_iso_code_2' => 'MH',
                'countries_iso_code_3' => 'MHL',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            133 => 
            array (
                'countries_id' => 134,
                'countries_name' => 'Martinique',
                'countries_iso_code_2' => 'MQ',
                'countries_iso_code_3' => 'MTQ',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            134 => 
            array (
                'countries_id' => 135,
                'countries_name' => 'Mauritania',
                'countries_iso_code_2' => 'MR',
                'countries_iso_code_3' => 'MRT',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            135 => 
            array (
                'countries_id' => 136,
                'countries_name' => 'Mauritius',
                'countries_iso_code_2' => 'MU',
                'countries_iso_code_3' => 'MUS',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            136 => 
            array (
                'countries_id' => 137,
                'countries_name' => 'Mayotte',
                'countries_iso_code_2' => 'YT',
                'countries_iso_code_3' => 'MYT',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            137 => 
            array (
                'countries_id' => 138,
                'countries_name' => 'Mexico',
                'countries_iso_code_2' => 'MX',
                'countries_iso_code_3' => 'MEX',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            138 => 
            array (
                'countries_id' => 139,
                'countries_name' => 'Micronesia, Federated States of',
                'countries_iso_code_2' => 'FM',
                'countries_iso_code_3' => 'FSM',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            139 => 
            array (
                'countries_id' => 140,
                'countries_name' => 'Moldova, Republic of',
                'countries_iso_code_2' => 'MD',
                'countries_iso_code_3' => 'MDA',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            140 => 
            array (
                'countries_id' => 141,
                'countries_name' => 'Monaco',
                'countries_iso_code_2' => 'MC',
                'countries_iso_code_3' => 'MCO',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            141 => 
            array (
                'countries_id' => 142,
                'countries_name' => 'Mongolia',
                'countries_iso_code_2' => 'MN',
                'countries_iso_code_3' => 'MNG',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            142 => 
            array (
                'countries_id' => 143,
                'countries_name' => 'Montserrat',
                'countries_iso_code_2' => 'MS',
                'countries_iso_code_3' => 'MSR',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            143 => 
            array (
                'countries_id' => 144,
                'countries_name' => 'Morocco',
                'countries_iso_code_2' => 'MA',
                'countries_iso_code_3' => 'MAR',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            144 => 
            array (
                'countries_id' => 145,
                'countries_name' => 'Mozambique',
                'countries_iso_code_2' => 'MZ',
                'countries_iso_code_3' => 'MOZ',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            145 => 
            array (
                'countries_id' => 146,
                'countries_name' => 'Myanmar',
                'countries_iso_code_2' => 'MM',
                'countries_iso_code_3' => 'MMR',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            146 => 
            array (
                'countries_id' => 147,
                'countries_name' => 'Namibia',
                'countries_iso_code_2' => 'NA',
                'countries_iso_code_3' => 'NAM',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            147 => 
            array (
                'countries_id' => 148,
                'countries_name' => 'Nauru',
                'countries_iso_code_2' => 'NR',
                'countries_iso_code_3' => 'NRU',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            148 => 
            array (
                'countries_id' => 149,
                'countries_name' => 'Nepal',
                'countries_iso_code_2' => 'NP',
                'countries_iso_code_3' => 'NPL',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            149 => 
            array (
                'countries_id' => 150,
                'countries_name' => 'Netherlands',
                'countries_iso_code_2' => 'NL',
                'countries_iso_code_3' => 'NLD',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            150 => 
            array (
                'countries_id' => 151,
                'countries_name' => 'Netherlands Antilles',
                'countries_iso_code_2' => 'AN',
                'countries_iso_code_3' => 'ANT',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            151 => 
            array (
                'countries_id' => 152,
                'countries_name' => 'New Caledonia',
                'countries_iso_code_2' => 'NC',
                'countries_iso_code_3' => 'NCL',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            152 => 
            array (
                'countries_id' => 153,
                'countries_name' => 'New Zealand',
                'countries_iso_code_2' => 'NZ',
                'countries_iso_code_3' => 'NZL',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            153 => 
            array (
                'countries_id' => 154,
                'countries_name' => 'Nicaragua',
                'countries_iso_code_2' => 'NI',
                'countries_iso_code_3' => 'NIC',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            154 => 
            array (
                'countries_id' => 155,
                'countries_name' => 'Niger',
                'countries_iso_code_2' => 'NE',
                'countries_iso_code_3' => 'NER',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            155 => 
            array (
                'countries_id' => 156,
                'countries_name' => 'Nigeria',
                'countries_iso_code_2' => 'NG',
                'countries_iso_code_3' => 'NGA',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            156 => 
            array (
                'countries_id' => 157,
                'countries_name' => 'Niue',
                'countries_iso_code_2' => 'NU',
                'countries_iso_code_3' => 'NIU',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            157 => 
            array (
                'countries_id' => 158,
                'countries_name' => 'Norfolk Island',
                'countries_iso_code_2' => 'NF',
                'countries_iso_code_3' => 'NFK',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            158 => 
            array (
                'countries_id' => 159,
                'countries_name' => 'Northern Mariana Islands',
                'countries_iso_code_2' => 'MP',
                'countries_iso_code_3' => 'MNP',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            159 => 
            array (
                'countries_id' => 160,
                'countries_name' => 'Norway',
                'countries_iso_code_2' => 'NO',
                'countries_iso_code_3' => 'NOR',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            160 => 
            array (
                'countries_id' => 161,
                'countries_name' => 'Oman',
                'countries_iso_code_2' => 'OM',
                'countries_iso_code_3' => 'OMN',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            161 => 
            array (
                'countries_id' => 162,
                'countries_name' => 'Pakistan',
                'countries_iso_code_2' => 'PK',
                'countries_iso_code_3' => 'PAK',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            162 => 
            array (
                'countries_id' => 163,
                'countries_name' => 'Palau',
                'countries_iso_code_2' => 'PW',
                'countries_iso_code_3' => 'PLW',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            163 => 
            array (
                'countries_id' => 164,
                'countries_name' => 'Panama',
                'countries_iso_code_2' => 'PA',
                'countries_iso_code_3' => 'PAN',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            164 => 
            array (
                'countries_id' => 165,
                'countries_name' => 'Papua New Guinea',
                'countries_iso_code_2' => 'PG',
                'countries_iso_code_3' => 'PNG',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            165 => 
            array (
                'countries_id' => 166,
                'countries_name' => 'Paraguay',
                'countries_iso_code_2' => 'PY',
                'countries_iso_code_3' => 'PRY',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            166 => 
            array (
                'countries_id' => 167,
                'countries_name' => 'Peru',
                'countries_iso_code_2' => 'PE',
                'countries_iso_code_3' => 'PER',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            167 => 
            array (
                'countries_id' => 168,
                'countries_name' => 'Philippines',
                'countries_iso_code_2' => 'PH',
                'countries_iso_code_3' => 'PHL',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            168 => 
            array (
                'countries_id' => 169,
                'countries_name' => 'Pitcairn',
                'countries_iso_code_2' => 'PN',
                'countries_iso_code_3' => 'PCN',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            169 => 
            array (
                'countries_id' => 170,
                'countries_name' => 'Poland',
                'countries_iso_code_2' => 'PL',
                'countries_iso_code_3' => 'POL',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            170 => 
            array (
                'countries_id' => 171,
                'countries_name' => 'Portugal',
                'countries_iso_code_2' => 'PT',
                'countries_iso_code_3' => 'PRT',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            171 => 
            array (
                'countries_id' => 172,
                'countries_name' => 'Puerto Rico',
                'countries_iso_code_2' => 'PR',
                'countries_iso_code_3' => 'PRI',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            172 => 
            array (
                'countries_id' => 173,
                'countries_name' => 'Qatar',
                'countries_iso_code_2' => 'QA',
                'countries_iso_code_3' => 'QAT',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            173 => 
            array (
                'countries_id' => 174,
                'countries_name' => 'Reunion',
                'countries_iso_code_2' => 'RE',
                'countries_iso_code_3' => 'REU',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            174 => 
            array (
                'countries_id' => 175,
                'countries_name' => 'Romania',
                'countries_iso_code_2' => 'RO',
                'countries_iso_code_3' => 'ROM',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            175 => 
            array (
                'countries_id' => 176,
                'countries_name' => 'Russian Federation',
                'countries_iso_code_2' => 'RU',
                'countries_iso_code_3' => 'RUS',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            176 => 
            array (
                'countries_id' => 177,
                'countries_name' => 'Rwanda',
                'countries_iso_code_2' => 'RW',
                'countries_iso_code_3' => 'RWA',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            177 => 
            array (
                'countries_id' => 178,
                'countries_name' => 'Saint Kitts and Nevis',
                'countries_iso_code_2' => 'KN',
                'countries_iso_code_3' => 'KNA',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            178 => 
            array (
                'countries_id' => 179,
                'countries_name' => 'Saint Lucia',
                'countries_iso_code_2' => 'LC',
                'countries_iso_code_3' => 'LCA',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            179 => 
            array (
                'countries_id' => 180,
                'countries_name' => 'Saint Vincent and the Grenadines',
                'countries_iso_code_2' => 'VC',
                'countries_iso_code_3' => 'VCT',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            180 => 
            array (
                'countries_id' => 181,
                'countries_name' => 'Samoa',
                'countries_iso_code_2' => 'WS',
                'countries_iso_code_3' => 'WSM',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            181 => 
            array (
                'countries_id' => 182,
                'countries_name' => 'San Marino',
                'countries_iso_code_2' => 'SM',
                'countries_iso_code_3' => 'SMR',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            182 => 
            array (
                'countries_id' => 183,
                'countries_name' => 'Sao Tome and Principe',
                'countries_iso_code_2' => 'ST',
                'countries_iso_code_3' => 'STP',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            183 => 
            array (
                'countries_id' => 184,
                'countries_name' => 'Saudi Arabia',
                'countries_iso_code_2' => 'SA',
                'countries_iso_code_3' => 'SAU',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            184 => 
            array (
                'countries_id' => 185,
                'countries_name' => 'Senegal',
                'countries_iso_code_2' => 'SN',
                'countries_iso_code_3' => 'SEN',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            185 => 
            array (
                'countries_id' => 186,
                'countries_name' => 'Seychelles',
                'countries_iso_code_2' => 'SC',
                'countries_iso_code_3' => 'SYC',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            186 => 
            array (
                'countries_id' => 187,
                'countries_name' => 'Sierra Leone',
                'countries_iso_code_2' => 'SL',
                'countries_iso_code_3' => 'SLE',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            187 => 
            array (
                'countries_id' => 188,
                'countries_name' => 'Singapore',
                'countries_iso_code_2' => 'SG',
                'countries_iso_code_3' => 'SGP',
                'address_format_id' => 4,
                'country_code' => NULL,
            ),
            188 => 
            array (
                'countries_id' => 189,
            'countries_name' => 'Slovakia (Slovak Republic)',
                'countries_iso_code_2' => 'SK',
                'countries_iso_code_3' => 'SVK',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            189 => 
            array (
                'countries_id' => 190,
                'countries_name' => 'Slovenia',
                'countries_iso_code_2' => 'SI',
                'countries_iso_code_3' => 'SVN',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            190 => 
            array (
                'countries_id' => 191,
                'countries_name' => 'Solomon Islands',
                'countries_iso_code_2' => 'SB',
                'countries_iso_code_3' => 'SLB',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            191 => 
            array (
                'countries_id' => 192,
                'countries_name' => 'Somalia',
                'countries_iso_code_2' => 'SO',
                'countries_iso_code_3' => 'SOM',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            192 => 
            array (
                'countries_id' => 193,
                'countries_name' => 'South Africa',
                'countries_iso_code_2' => 'ZA',
                'countries_iso_code_3' => 'ZAF',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            193 => 
            array (
                'countries_id' => 194,
                'countries_name' => 'South Georgia and the South Sandwich Islands',
                'countries_iso_code_2' => 'GS',
                'countries_iso_code_3' => 'SGS',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            194 => 
            array (
                'countries_id' => 195,
                'countries_name' => 'Spain',
                'countries_iso_code_2' => 'ES',
                'countries_iso_code_3' => 'ESP',
                'address_format_id' => 3,
                'country_code' => NULL,
            ),
            195 => 
            array (
                'countries_id' => 196,
                'countries_name' => 'Sri Lanka',
                'countries_iso_code_2' => 'LK',
                'countries_iso_code_3' => 'LKA',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            196 => 
            array (
                'countries_id' => 197,
                'countries_name' => 'St. Helena',
                'countries_iso_code_2' => 'SH',
                'countries_iso_code_3' => 'SHN',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            197 => 
            array (
                'countries_id' => 198,
                'countries_name' => 'St. Pierre and Miquelon',
                'countries_iso_code_2' => 'PM',
                'countries_iso_code_3' => 'SPM',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            198 => 
            array (
                'countries_id' => 199,
                'countries_name' => 'Sudan',
                'countries_iso_code_2' => 'SD',
                'countries_iso_code_3' => 'SDN',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            199 => 
            array (
                'countries_id' => 200,
                'countries_name' => 'Suriname',
                'countries_iso_code_2' => 'SR',
                'countries_iso_code_3' => 'SUR',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            200 => 
            array (
                'countries_id' => 201,
                'countries_name' => 'Svalbard and Jan Mayen Islands',
                'countries_iso_code_2' => 'SJ',
                'countries_iso_code_3' => 'SJM',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            201 => 
            array (
                'countries_id' => 202,
                'countries_name' => 'Swaziland',
                'countries_iso_code_2' => 'SZ',
                'countries_iso_code_3' => 'SWZ',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            202 => 
            array (
                'countries_id' => 203,
                'countries_name' => 'Sweden',
                'countries_iso_code_2' => 'SE',
                'countries_iso_code_3' => 'SWE',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            203 => 
            array (
                'countries_id' => 204,
                'countries_name' => 'Switzerland',
                'countries_iso_code_2' => 'CH',
                'countries_iso_code_3' => 'CHE',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            204 => 
            array (
                'countries_id' => 205,
                'countries_name' => 'Syrian Arab Republic',
                'countries_iso_code_2' => 'SY',
                'countries_iso_code_3' => 'SYR',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            205 => 
            array (
                'countries_id' => 206,
                'countries_name' => 'Taiwan',
                'countries_iso_code_2' => 'TW',
                'countries_iso_code_3' => 'TWN',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            206 => 
            array (
                'countries_id' => 207,
                'countries_name' => 'Tajikistan',
                'countries_iso_code_2' => 'TJ',
                'countries_iso_code_3' => 'TJK',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            207 => 
            array (
                'countries_id' => 208,
                'countries_name' => 'Tanzania, United Republic of',
                'countries_iso_code_2' => 'TZ',
                'countries_iso_code_3' => 'TZA',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            208 => 
            array (
                'countries_id' => 209,
                'countries_name' => 'Thailand',
                'countries_iso_code_2' => 'TH',
                'countries_iso_code_3' => 'THA',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            209 => 
            array (
                'countries_id' => 210,
                'countries_name' => 'Togo',
                'countries_iso_code_2' => 'TG',
                'countries_iso_code_3' => 'TGO',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            210 => 
            array (
                'countries_id' => 211,
                'countries_name' => 'Tokelau',
                'countries_iso_code_2' => 'TK',
                'countries_iso_code_3' => 'TKL',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            211 => 
            array (
                'countries_id' => 212,
                'countries_name' => 'Tonga',
                'countries_iso_code_2' => 'TO',
                'countries_iso_code_3' => 'TON',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            212 => 
            array (
                'countries_id' => 213,
                'countries_name' => 'Trinidad and Tobago',
                'countries_iso_code_2' => 'TT',
                'countries_iso_code_3' => 'TTO',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            213 => 
            array (
                'countries_id' => 214,
                'countries_name' => 'Tunisia',
                'countries_iso_code_2' => 'TN',
                'countries_iso_code_3' => 'TUN',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            214 => 
            array (
                'countries_id' => 215,
                'countries_name' => 'Turkey',
                'countries_iso_code_2' => 'TR',
                'countries_iso_code_3' => 'TUR',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            215 => 
            array (
                'countries_id' => 216,
                'countries_name' => 'Turkmenistan',
                'countries_iso_code_2' => 'TM',
                'countries_iso_code_3' => 'TKM',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            216 => 
            array (
                'countries_id' => 217,
                'countries_name' => 'Turks and Caicos Islands',
                'countries_iso_code_2' => 'TC',
                'countries_iso_code_3' => 'TCA',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            217 => 
            array (
                'countries_id' => 218,
                'countries_name' => 'Tuvalu',
                'countries_iso_code_2' => 'TV',
                'countries_iso_code_3' => 'TUV',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            218 => 
            array (
                'countries_id' => 219,
                'countries_name' => 'Uganda',
                'countries_iso_code_2' => 'UG',
                'countries_iso_code_3' => 'UGA',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            219 => 
            array (
                'countries_id' => 220,
                'countries_name' => 'Ukraine',
                'countries_iso_code_2' => 'UA',
                'countries_iso_code_3' => 'UKR',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            220 => 
            array (
                'countries_id' => 221,
                'countries_name' => 'United Arab Emirates',
                'countries_iso_code_2' => 'AE',
                'countries_iso_code_3' => 'ARE',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            221 => 
            array (
                'countries_id' => 222,
                'countries_name' => 'United Kingdom',
                'countries_iso_code_2' => 'GB',
                'countries_iso_code_3' => 'GBR',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            222 => 
            array (
                'countries_id' => 223,
                'countries_name' => 'United States',
                'countries_iso_code_2' => 'US',
                'countries_iso_code_3' => 'USA',
                'address_format_id' => 2,
                'country_code' => NULL,
            ),
            223 => 
            array (
                'countries_id' => 224,
                'countries_name' => 'United States Minor Outlying Islands',
                'countries_iso_code_2' => 'UM',
                'countries_iso_code_3' => 'UMI',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            224 => 
            array (
                'countries_id' => 225,
                'countries_name' => 'Uruguay',
                'countries_iso_code_2' => 'UY',
                'countries_iso_code_3' => 'URY',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            225 => 
            array (
                'countries_id' => 226,
                'countries_name' => 'Uzbekistan',
                'countries_iso_code_2' => 'UZ',
                'countries_iso_code_3' => 'UZB',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            226 => 
            array (
                'countries_id' => 227,
                'countries_name' => 'Vanuatu',
                'countries_iso_code_2' => 'VU',
                'countries_iso_code_3' => 'VUT',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            227 => 
            array (
                'countries_id' => 228,
            'countries_name' => 'Vatican City State (Holy See)',
                'countries_iso_code_2' => 'VA',
                'countries_iso_code_3' => 'VAT',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            228 => 
            array (
                'countries_id' => 229,
                'countries_name' => 'Venezuela',
                'countries_iso_code_2' => 'VE',
                'countries_iso_code_3' => 'VEN',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            229 => 
            array (
                'countries_id' => 230,
                'countries_name' => 'Viet Nam',
                'countries_iso_code_2' => 'VN',
                'countries_iso_code_3' => 'VNM',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            230 => 
            array (
                'countries_id' => 231,
            'countries_name' => 'Virgin Islands (British)',
                'countries_iso_code_2' => 'VG',
                'countries_iso_code_3' => 'VGB',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            231 => 
            array (
                'countries_id' => 232,
            'countries_name' => 'Virgin Islands (U.S.)',
                'countries_iso_code_2' => 'VI',
                'countries_iso_code_3' => 'VIR',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            232 => 
            array (
                'countries_id' => 233,
                'countries_name' => 'Wallis and Futuna Islands',
                'countries_iso_code_2' => 'WF',
                'countries_iso_code_3' => 'WLF',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            233 => 
            array (
                'countries_id' => 234,
                'countries_name' => 'Western Sahara',
                'countries_iso_code_2' => 'EH',
                'countries_iso_code_3' => 'ESH',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            234 => 
            array (
                'countries_id' => 235,
                'countries_name' => 'Yemen',
                'countries_iso_code_2' => 'YE',
                'countries_iso_code_3' => 'YEM',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            235 => 
            array (
                'countries_id' => 236,
                'countries_name' => 'Yugoslavia',
                'countries_iso_code_2' => 'YU',
                'countries_iso_code_3' => 'YUG',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            236 => 
            array (
                'countries_id' => 237,
                'countries_name' => 'Zaire',
                'countries_iso_code_2' => 'ZR',
                'countries_iso_code_3' => 'ZAR',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            237 => 
            array (
                'countries_id' => 238,
                'countries_name' => 'Zambia',
                'countries_iso_code_2' => 'ZM',
                'countries_iso_code_3' => 'ZMB',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
            238 => 
            array (
                'countries_id' => 239,
                'countries_name' => 'Zimbabwe',
                'countries_iso_code_2' => 'ZW',
                'countries_iso_code_3' => 'ZWE',
                'address_format_id' => 1,
                'country_code' => NULL,
            ),
        ));
        
        
    }
}