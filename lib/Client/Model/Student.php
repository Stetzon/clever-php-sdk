<?php
/**
 * Student
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Clever API
 *
 * The Clever API
 *
 * OpenAPI spec version: 3.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Student Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Student implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Student';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created' => 'string',
'credentials' => '\Swagger\Client\Model\Credentials',
'dob' => 'string',
'ell_status' => 'string',
'enrollments' => '\Swagger\Client\Model\SchoolEnrollment[]',
'ext' => 'object',
'gender' => 'string',
'grade' => 'string',
'graduation_year' => 'string',
'hispanic_ethnicity' => 'string',
'home_language' => 'string',
'iep_status' => 'string',
'last_modified' => 'string',
'legacy_id' => 'string',
'location' => '\Swagger\Client\Model\Location',
'race' => 'string',
'school' => 'string',
'schools' => 'string[]',
'sis_id' => 'string',
'state_id' => 'string',
'student_number' => 'string',
'unweighted_gpa' => 'string',
'weighted_gpa' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created' => 'datetime',
'credentials' => null,
'dob' => null,
'ell_status' => null,
'enrollments' => null,
'ext' => null,
'gender' => null,
'grade' => null,
'graduation_year' => null,
'hispanic_ethnicity' => null,
'home_language' => null,
'iep_status' => null,
'last_modified' => 'datetime',
'legacy_id' => null,
'location' => null,
'race' => null,
'school' => null,
'schools' => null,
'sis_id' => null,
'state_id' => null,
'student_number' => null,
'unweighted_gpa' => null,
'weighted_gpa' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'created' => 'created',
'credentials' => 'credentials',
'dob' => 'dob',
'ell_status' => 'ell_status',
'enrollments' => 'enrollments',
'ext' => 'ext',
'gender' => 'gender',
'grade' => 'grade',
'graduation_year' => 'graduation_year',
'hispanic_ethnicity' => 'hispanic_ethnicity',
'home_language' => 'home_language',
'iep_status' => 'iep_status',
'last_modified' => 'last_modified',
'legacy_id' => 'legacy_id',
'location' => 'location',
'race' => 'race',
'school' => 'school',
'schools' => 'schools',
'sis_id' => 'sis_id',
'state_id' => 'state_id',
'student_number' => 'student_number',
'unweighted_gpa' => 'unweighted_gpa',
'weighted_gpa' => 'weighted_gpa'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created' => 'setCreated',
'credentials' => 'setCredentials',
'dob' => 'setDob',
'ell_status' => 'setEllStatus',
'enrollments' => 'setEnrollments',
'ext' => 'setExt',
'gender' => 'setGender',
'grade' => 'setGrade',
'graduation_year' => 'setGraduationYear',
'hispanic_ethnicity' => 'setHispanicEthnicity',
'home_language' => 'setHomeLanguage',
'iep_status' => 'setIepStatus',
'last_modified' => 'setLastModified',
'legacy_id' => 'setLegacyId',
'location' => 'setLocation',
'race' => 'setRace',
'school' => 'setSchool',
'schools' => 'setSchools',
'sis_id' => 'setSisId',
'state_id' => 'setStateId',
'student_number' => 'setStudentNumber',
'unweighted_gpa' => 'setUnweightedGpa',
'weighted_gpa' => 'setWeightedGpa'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created' => 'getCreated',
'credentials' => 'getCredentials',
'dob' => 'getDob',
'ell_status' => 'getEllStatus',
'enrollments' => 'getEnrollments',
'ext' => 'getExt',
'gender' => 'getGender',
'grade' => 'getGrade',
'graduation_year' => 'getGraduationYear',
'hispanic_ethnicity' => 'getHispanicEthnicity',
'home_language' => 'getHomeLanguage',
'iep_status' => 'getIepStatus',
'last_modified' => 'getLastModified',
'legacy_id' => 'getLegacyId',
'location' => 'getLocation',
'race' => 'getRace',
'school' => 'getSchool',
'schools' => 'getSchools',
'sis_id' => 'getSisId',
'state_id' => 'getStateId',
'student_number' => 'getStudentNumber',
'unweighted_gpa' => 'getUnweightedGpa',
'weighted_gpa' => 'getWeightedGpa'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const ELL_STATUS_Y = 'Y';
const ELL_STATUS_N = 'N';
const ELL_STATUS_EMPTY = '';
const GENDER_M = 'M';
const GENDER_F = 'F';
const GENDER_X = 'X';
const GENDER_EMPTY = '';
const GRADE_INFANT_TODDLER = 'InfantToddler';
const GRADE_PRESCHOOL = 'Preschool';
const GRADE_PRE_KINDERGARTEN = 'PreKindergarten';
const GRADE_TRANSITIONAL_KINDERGARTEN = 'TransitionalKindergarten';
const GRADE_KINDERGARTEN = 'Kindergarten';
const GRADE__1 = '1';
const GRADE__2 = '2';
const GRADE__3 = '3';
const GRADE__4 = '4';
const GRADE__5 = '5';
const GRADE__6 = '6';
const GRADE__7 = '7';
const GRADE__8 = '8';
const GRADE__9 = '9';
const GRADE__10 = '10';
const GRADE__11 = '11';
const GRADE__12 = '12';
const GRADE__13 = '13';
const GRADE_POST_GRADUATE = 'PostGraduate';
const GRADE_UNGRADED = 'Ungraded';
const GRADE_OTHER = 'Other';
const GRADE_EMPTY = '';
const HISPANIC_ETHNICITY_Y = 'Y';
const HISPANIC_ETHNICITY_N = 'N';
const HISPANIC_ETHNICITY_EMPTY = '';
const HOME_LANGUAGE_ENGLISH = 'English';
const HOME_LANGUAGE_ALBANIAN = 'Albanian';
const HOME_LANGUAGE_AMHARIC = 'Amharic';
const HOME_LANGUAGE_ARABIC = 'Arabic';
const HOME_LANGUAGE_BENGALI = 'Bengali';
const HOME_LANGUAGE_BOSNIAN = 'Bosnian';
const HOME_LANGUAGE_BURMESE = 'Burmese';
const HOME_LANGUAGE_CANTONESE = 'Cantonese';
const HOME_LANGUAGE_CHINESE = 'Chinese';
const HOME_LANGUAGE_DUTCH = 'Dutch';
const HOME_LANGUAGE_FARSI = 'Farsi';
const HOME_LANGUAGE_FRENCH = 'French';
const HOME_LANGUAGE_GERMAN = 'German';
const HOME_LANGUAGE_HEBREW = 'Hebrew';
const HOME_LANGUAGE_HINDI = 'Hindi';
const HOME_LANGUAGE_HMONG = 'Hmong';
const HOME_LANGUAGE_ILOCANO = 'Ilocano';
const HOME_LANGUAGE_JAPANESE = 'Japanese';
const HOME_LANGUAGE_JAVANESE = 'Javanese';
const HOME_LANGUAGE_KAREN = 'Karen';
const HOME_LANGUAGE_KHMER = 'Khmer';
const HOME_LANGUAGE_KOREAN = 'Korean';
const HOME_LANGUAGE_LAOTIAN = 'Laotian';
const HOME_LANGUAGE_LATVIAN = 'Latvian';
const HOME_LANGUAGE_MALAY = 'Malay';
const HOME_LANGUAGE_MANDARIN = 'Mandarin';
const HOME_LANGUAGE_NEPALI = 'Nepali';
const HOME_LANGUAGE_OROMO = 'Oromo';
const HOME_LANGUAGE_POLISH = 'Polish';
const HOME_LANGUAGE_PORTUGUESE = 'Portuguese';
const HOME_LANGUAGE_PUNJABI = 'Punjabi';
const HOME_LANGUAGE_ROMANIAN = 'Romanian';
const HOME_LANGUAGE_RUSSIAN = 'Russian';
const HOME_LANGUAGE_SAMOAN = 'Samoan';
const HOME_LANGUAGE_SERBIAN = 'Serbian';
const HOME_LANGUAGE_SOMALI = 'Somali';
const HOME_LANGUAGE_SPANISH = 'Spanish';
const HOME_LANGUAGE_SWAHILI = 'Swahili';
const HOME_LANGUAGE_TAGALOG = 'Tagalog';
const HOME_LANGUAGE_TAMIL = 'Tamil';
const HOME_LANGUAGE_TELUGU = 'Telugu';
const HOME_LANGUAGE_THAI = 'Thai';
const HOME_LANGUAGE_TIGRINYA = 'Tigrinya';
const HOME_LANGUAGE_TURKISH = 'Turkish';
const HOME_LANGUAGE_UKRAINIAN = 'Ukrainian';
const HOME_LANGUAGE_URDU = 'Urdu';
const HOME_LANGUAGE_VIETNAMESE = 'Vietnamese';
const HOME_LANGUAGE_EMPTY = '';
const RACE_CAUCASIAN = 'Caucasian';
const RACE_ASIAN = 'Asian';
const RACE_BLACK_OR_AFRICAN_AMERICAN = 'Black or African American';
const RACE_AMERICAN_INDIAN = 'American Indian';
const RACE_HAWAIIAN_OR_OTHER_PACIFIC_ISLANDER = 'Hawaiian or Other Pacific Islander';
const RACE_TWO_OR_MORE_RACES = 'Two or More Races';
const RACE_UNKNOWN = 'Unknown';
const RACE_EMPTY = '';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEllStatusAllowableValues()
    {
        return [
            self::ELL_STATUS_Y,
self::ELL_STATUS_N,
self::ELL_STATUS_EMPTY,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGenderAllowableValues()
    {
        return [
            self::GENDER_M,
self::GENDER_F,
self::GENDER_X,
self::GENDER_EMPTY,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGradeAllowableValues()
    {
        return [
            self::GRADE_INFANT_TODDLER,
self::GRADE_PRESCHOOL,
self::GRADE_PRE_KINDERGARTEN,
self::GRADE_TRANSITIONAL_KINDERGARTEN,
self::GRADE_KINDERGARTEN,
self::GRADE__1,
self::GRADE__2,
self::GRADE__3,
self::GRADE__4,
self::GRADE__5,
self::GRADE__6,
self::GRADE__7,
self::GRADE__8,
self::GRADE__9,
self::GRADE__10,
self::GRADE__11,
self::GRADE__12,
self::GRADE__13,
self::GRADE_POST_GRADUATE,
self::GRADE_UNGRADED,
self::GRADE_OTHER,
self::GRADE_EMPTY,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHispanicEthnicityAllowableValues()
    {
        return [
            self::HISPANIC_ETHNICITY_Y,
self::HISPANIC_ETHNICITY_N,
self::HISPANIC_ETHNICITY_EMPTY,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHomeLanguageAllowableValues()
    {
        return [
            self::HOME_LANGUAGE_ENGLISH,
self::HOME_LANGUAGE_ALBANIAN,
self::HOME_LANGUAGE_AMHARIC,
self::HOME_LANGUAGE_ARABIC,
self::HOME_LANGUAGE_BENGALI,
self::HOME_LANGUAGE_BOSNIAN,
self::HOME_LANGUAGE_BURMESE,
self::HOME_LANGUAGE_CANTONESE,
self::HOME_LANGUAGE_CHINESE,
self::HOME_LANGUAGE_DUTCH,
self::HOME_LANGUAGE_FARSI,
self::HOME_LANGUAGE_FRENCH,
self::HOME_LANGUAGE_GERMAN,
self::HOME_LANGUAGE_HEBREW,
self::HOME_LANGUAGE_HINDI,
self::HOME_LANGUAGE_HMONG,
self::HOME_LANGUAGE_ILOCANO,
self::HOME_LANGUAGE_JAPANESE,
self::HOME_LANGUAGE_JAVANESE,
self::HOME_LANGUAGE_KAREN,
self::HOME_LANGUAGE_KHMER,
self::HOME_LANGUAGE_KOREAN,
self::HOME_LANGUAGE_LAOTIAN,
self::HOME_LANGUAGE_LATVIAN,
self::HOME_LANGUAGE_MALAY,
self::HOME_LANGUAGE_MANDARIN,
self::HOME_LANGUAGE_NEPALI,
self::HOME_LANGUAGE_OROMO,
self::HOME_LANGUAGE_POLISH,
self::HOME_LANGUAGE_PORTUGUESE,
self::HOME_LANGUAGE_PUNJABI,
self::HOME_LANGUAGE_ROMANIAN,
self::HOME_LANGUAGE_RUSSIAN,
self::HOME_LANGUAGE_SAMOAN,
self::HOME_LANGUAGE_SERBIAN,
self::HOME_LANGUAGE_SOMALI,
self::HOME_LANGUAGE_SPANISH,
self::HOME_LANGUAGE_SWAHILI,
self::HOME_LANGUAGE_TAGALOG,
self::HOME_LANGUAGE_TAMIL,
self::HOME_LANGUAGE_TELUGU,
self::HOME_LANGUAGE_THAI,
self::HOME_LANGUAGE_TIGRINYA,
self::HOME_LANGUAGE_TURKISH,
self::HOME_LANGUAGE_UKRAINIAN,
self::HOME_LANGUAGE_URDU,
self::HOME_LANGUAGE_VIETNAMESE,
self::HOME_LANGUAGE_EMPTY,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRaceAllowableValues()
    {
        return [
            self::RACE_CAUCASIAN,
self::RACE_ASIAN,
self::RACE_BLACK_OR_AFRICAN_AMERICAN,
self::RACE_AMERICAN_INDIAN,
self::RACE_HAWAIIAN_OR_OTHER_PACIFIC_ISLANDER,
self::RACE_TWO_OR_MORE_RACES,
self::RACE_UNKNOWN,
self::RACE_EMPTY,        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['credentials'] = isset($data['credentials']) ? $data['credentials'] : null;
        $this->container['dob'] = isset($data['dob']) ? $data['dob'] : null;
        $this->container['ell_status'] = isset($data['ell_status']) ? $data['ell_status'] : null;
        $this->container['enrollments'] = isset($data['enrollments']) ? $data['enrollments'] : null;
        $this->container['ext'] = isset($data['ext']) ? $data['ext'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['grade'] = isset($data['grade']) ? $data['grade'] : null;
        $this->container['graduation_year'] = isset($data['graduation_year']) ? $data['graduation_year'] : null;
        $this->container['hispanic_ethnicity'] = isset($data['hispanic_ethnicity']) ? $data['hispanic_ethnicity'] : null;
        $this->container['home_language'] = isset($data['home_language']) ? $data['home_language'] : null;
        $this->container['iep_status'] = isset($data['iep_status']) ? $data['iep_status'] : null;
        $this->container['last_modified'] = isset($data['last_modified']) ? $data['last_modified'] : null;
        $this->container['legacy_id'] = isset($data['legacy_id']) ? $data['legacy_id'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['race'] = isset($data['race']) ? $data['race'] : null;
        $this->container['school'] = isset($data['school']) ? $data['school'] : null;
        $this->container['schools'] = isset($data['schools']) ? $data['schools'] : null;
        $this->container['sis_id'] = isset($data['sis_id']) ? $data['sis_id'] : null;
        $this->container['state_id'] = isset($data['state_id']) ? $data['state_id'] : null;
        $this->container['student_number'] = isset($data['student_number']) ? $data['student_number'] : null;
        $this->container['unweighted_gpa'] = isset($data['unweighted_gpa']) ? $data['unweighted_gpa'] : null;
        $this->container['weighted_gpa'] = isset($data['weighted_gpa']) ? $data['weighted_gpa'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getEllStatusAllowableValues();
        if (!is_null($this->container['ell_status']) && !in_array($this->container['ell_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'ell_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($this->container['gender']) && !in_array($this->container['gender'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'gender', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getGradeAllowableValues();
        if (!is_null($this->container['grade']) && !in_array($this->container['grade'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'grade', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getHispanicEthnicityAllowableValues();
        if (!is_null($this->container['hispanic_ethnicity']) && !in_array($this->container['hispanic_ethnicity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'hispanic_ethnicity', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getHomeLanguageAllowableValues();
        if (!is_null($this->container['home_language']) && !in_array($this->container['home_language'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'home_language', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRaceAllowableValues();
        if (!is_null($this->container['race']) && !in_array($this->container['race'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'race', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets created
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param string $created created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets credentials
     *
     * @return \Swagger\Client\Model\Credentials
     */
    public function getCredentials()
    {
        return $this->container['credentials'];
    }

    /**
     * Sets credentials
     *
     * @param \Swagger\Client\Model\Credentials $credentials credentials
     *
     * @return $this
     */
    public function setCredentials($credentials)
    {
        $this->container['credentials'] = $credentials;

        return $this;
    }

    /**
     * Gets dob
     *
     * @return string
     */
    public function getDob()
    {
        return $this->container['dob'];
    }

    /**
     * Sets dob
     *
     * @param string $dob dob
     *
     * @return $this
     */
    public function setDob($dob)
    {
        $this->container['dob'] = $dob;

        return $this;
    }

    /**
     * Gets ell_status
     *
     * @return string
     */
    public function getEllStatus()
    {
        return $this->container['ell_status'];
    }

    /**
     * Sets ell_status
     *
     * @param string $ell_status ell_status
     *
     * @return $this
     */
    public function setEllStatus($ell_status)
    {
        $allowedValues = $this->getEllStatusAllowableValues();
        if (!is_null($ell_status) && !in_array($ell_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'ell_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['ell_status'] = $ell_status;

        return $this;
    }

    /**
     * Gets enrollments
     *
     * @return \Swagger\Client\Model\SchoolEnrollment[]
     */
    public function getEnrollments()
    {
        return $this->container['enrollments'];
    }

    /**
     * Sets enrollments
     *
     * @param \Swagger\Client\Model\SchoolEnrollment[] $enrollments enrollments
     *
     * @return $this
     */
    public function setEnrollments($enrollments)
    {
        $this->container['enrollments'] = $enrollments;

        return $this;
    }

    /**
     * Gets ext
     *
     * @return object
     */
    public function getExt()
    {
        return $this->container['ext'];
    }

    /**
     * Sets ext
     *
     * @param object $ext ext
     *
     * @return $this
     */
    public function setExt($ext)
    {
        $this->container['ext'] = $ext;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string $gender gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($gender) && !in_array($gender, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'gender', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets grade
     *
     * @return string
     */
    public function getGrade()
    {
        return $this->container['grade'];
    }

    /**
     * Sets grade
     *
     * @param string $grade grade
     *
     * @return $this
     */
    public function setGrade($grade)
    {
        $allowedValues = $this->getGradeAllowableValues();
        if (!is_null($grade) && !in_array($grade, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'grade', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['grade'] = $grade;

        return $this;
    }

    /**
     * Gets graduation_year
     *
     * @return string
     */
    public function getGraduationYear()
    {
        return $this->container['graduation_year'];
    }

    /**
     * Sets graduation_year
     *
     * @param string $graduation_year graduation_year
     *
     * @return $this
     */
    public function setGraduationYear($graduation_year)
    {
        $this->container['graduation_year'] = $graduation_year;

        return $this;
    }

    /**
     * Gets hispanic_ethnicity
     *
     * @return string
     */
    public function getHispanicEthnicity()
    {
        return $this->container['hispanic_ethnicity'];
    }

    /**
     * Sets hispanic_ethnicity
     *
     * @param string $hispanic_ethnicity hispanic_ethnicity
     *
     * @return $this
     */
    public function setHispanicEthnicity($hispanic_ethnicity)
    {
        $allowedValues = $this->getHispanicEthnicityAllowableValues();
        if (!is_null($hispanic_ethnicity) && !in_array($hispanic_ethnicity, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'hispanic_ethnicity', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['hispanic_ethnicity'] = $hispanic_ethnicity;

        return $this;
    }

    /**
     * Gets home_language
     *
     * @return string
     */
    public function getHomeLanguage()
    {
        return $this->container['home_language'];
    }

    /**
     * Sets home_language
     *
     * @param string $home_language home_language
     *
     * @return $this
     */
    public function setHomeLanguage($home_language)
    {
        $allowedValues = $this->getHomeLanguageAllowableValues();
        if (!is_null($home_language) && !in_array($home_language, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'home_language', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['home_language'] = $home_language;

        return $this;
    }

    /**
     * Gets iep_status
     *
     * @return string
     */
    public function getIepStatus()
    {
        return $this->container['iep_status'];
    }

    /**
     * Sets iep_status
     *
     * @param string $iep_status iep_status
     *
     * @return $this
     */
    public function setIepStatus($iep_status)
    {
        $this->container['iep_status'] = $iep_status;

        return $this;
    }

    /**
     * Gets last_modified
     *
     * @return string
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     *
     * @param string $last_modified last_modified
     *
     * @return $this
     */
    public function setLastModified($last_modified)
    {
        $this->container['last_modified'] = $last_modified;

        return $this;
    }

    /**
     * Gets legacy_id
     *
     * @return string
     */
    public function getLegacyId()
    {
        return $this->container['legacy_id'];
    }

    /**
     * Sets legacy_id
     *
     * @param string $legacy_id legacy_id
     *
     * @return $this
     */
    public function setLegacyId($legacy_id)
    {
        $this->container['legacy_id'] = $legacy_id;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \Swagger\Client\Model\Location
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \Swagger\Client\Model\Location $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets race
     *
     * @return string
     */
    public function getRace()
    {
        return $this->container['race'];
    }

    /**
     * Sets race
     *
     * @param string $race race
     *
     * @return $this
     */
    public function setRace($race)
    {
        $allowedValues = $this->getRaceAllowableValues();
        if (!is_null($race) && !in_array($race, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'race', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['race'] = $race;

        return $this;
    }

    /**
     * Gets school
     *
     * @return string
     */
    public function getSchool()
    {
        return $this->container['school'];
    }

    /**
     * Sets school
     *
     * @param string $school school
     *
     * @return $this
     */
    public function setSchool($school)
    {
        $this->container['school'] = $school;

        return $this;
    }

    /**
     * Gets schools
     *
     * @return string[]
     */
    public function getSchools()
    {
        return $this->container['schools'];
    }

    /**
     * Sets schools
     *
     * @param string[] $schools schools
     *
     * @return $this
     */
    public function setSchools($schools)
    {
        $this->container['schools'] = $schools;

        return $this;
    }

    /**
     * Gets sis_id
     *
     * @return string
     */
    public function getSisId()
    {
        return $this->container['sis_id'];
    }

    /**
     * Sets sis_id
     *
     * @param string $sis_id sis_id
     *
     * @return $this
     */
    public function setSisId($sis_id)
    {
        $this->container['sis_id'] = $sis_id;

        return $this;
    }

    /**
     * Gets state_id
     *
     * @return string
     */
    public function getStateId()
    {
        return $this->container['state_id'];
    }

    /**
     * Sets state_id
     *
     * @param string $state_id state_id
     *
     * @return $this
     */
    public function setStateId($state_id)
    {
        $this->container['state_id'] = $state_id;

        return $this;
    }

    /**
     * Gets student_number
     *
     * @return string
     */
    public function getStudentNumber()
    {
        return $this->container['student_number'];
    }

    /**
     * Sets student_number
     *
     * @param string $student_number student_number
     *
     * @return $this
     */
    public function setStudentNumber($student_number)
    {
        $this->container['student_number'] = $student_number;

        return $this;
    }

    /**
     * Gets unweighted_gpa
     *
     * @return string
     */
    public function getUnweightedGpa()
    {
        return $this->container['unweighted_gpa'];
    }

    /**
     * Sets unweighted_gpa
     *
     * @param string $unweighted_gpa unweighted_gpa
     *
     * @return $this
     */
    public function setUnweightedGpa($unweighted_gpa)
    {
        $this->container['unweighted_gpa'] = $unweighted_gpa;

        return $this;
    }

    /**
     * Gets weighted_gpa
     *
     * @return string
     */
    public function getWeightedGpa()
    {
        return $this->container['weighted_gpa'];
    }

    /**
     * Sets weighted_gpa
     *
     * @param string $weighted_gpa weighted_gpa
     *
     * @return $this
     */
    public function setWeightedGpa($weighted_gpa)
    {
        $this->container['weighted_gpa'] = $weighted_gpa;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}