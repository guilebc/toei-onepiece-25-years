<?php

namespace App\Services\Smartproxy\SocialMedia;

use phpDocumentor\Reflection\Types\Self_;

/**
 * @see https://help.smartproxy.com/docs/social-media-geo
 */
class Countries
{
    const UNITED_ARAB_EMIRATES = "United Arab Emirates";
    const BANGLADESH = "Bangladesh";
    const KUWAIT = "Kuwait";
    const PHILIPPINES = "Philippines";
    const NEW_ZEALAND = "New Zealand";
    const BAHAMAS = "Bahamas";
    const ALBANIA = "Albania";
    const UGANDA = "Uganda";
    const CHINA = "China";
    const INDIA = "India";
    const KAZAKHSTAN = "Kazakhstan";
    const CUBA = "Cuba";
    const YEMEN = "Yemen";
    const JAMAICA = "Jamaica";
    const LITHUANIA = "Lithuania";
    const URUGUAY = "Uruguay";
    const TUNISIA = "Tunisia";
    const HUNGARY = "Hungary";
    const GREENLAND = "Greenland";
    const UNITED_STATES = "United States";
    const GUINEA = "Guinea";
    const CANADA = "Canada";
    const NORWAY = "Norway";
    const BELARUS = "Belarus";
    const SWITZERLAND = "Switzerland";
    const KOREA = "Korea";
    const SWEDEN = "Sweden";
    const ZIMBABWE = "Zimbabwe";
    const EGYPT = "Egypt";
    const NETHERLANDS = "Netherlands";
    const TAJIKISTAN = "Tajikistan";
    const PANAMA = "Panama";
    const SOUTH_AFRICA = "South Africa";
    const AFGHANISTAN = "Afghanistan";
    const AZERBAIJAN = "Azerbaijan";
    const SINGAPORE = "Singapore";
    const AUSTRIA = "Austria";
    const DENMARK = "Denmark";
    const TURKMENISTAN = "Turkmenistan";
    const GERMANY = "Germany";
    const PUERTO_RICO = "Puerto Rico";
    const MEXICO = "Mexico";
    const OMAN = "Oman";
    const ESTONIA = "Estonia";
    const CHILE = "Chile";
    const UKRAINE = "Ukraine";
    const POLAND = "Poland";
    const CENTRAL_AFRICAN_REPUBLIC = "Central African Republic";
    const GIBRALTAR = "Gibraltar";
    const ANDORRA = "Andorra";
    const IRAQ = "Iraq";
    const ARGENTINA = "Argentina";
    const GEORGIA = "Georgia";
    const ANTARCTICA = "Antarctica";
    const PORTUGAL = "Portugal";
    const JERSEY = "Jersey";
    const HONG_KONG = "Hong Kong";
    const CONGO = "Congo";
    const DOMINICAN_REPUBLIC = "Dominican Republic";
    const SLOVENIA = "Slovenia";
    const COSTA_RICA = "Costa Rica";
    const JAPAN = "Japan";
    const BULGARIA = "Bulgaria";
    const MONGOLIA = "Mongolia";
    const KIRIBATI = "Kiribati";
    const ROMANIA = "Romania";
    const ISRAEL = "Israel";
    const BELGIUM = "Belgium";
    const QATAR = "Qatar";
    const SOUTH_SUDAN = "South Sudan";
    const COLOMBIA = "Colombia";
    const ECUADOR = "Ecuador";
    const KENYA = "Kenya";
    const CYPRUS = "Cyprus";
    const MOROCCO = "Morocco";
    const RUSSIA = "Russia";
    const ITALY = "Italy";
    const IRELAND = "Ireland";
    const UNITED_KINGDOM = "United Kingdom";
    const UZBEKISTAN = "Uzbekistan";
    const SOMALIA = "Somalia";
    const BRAZIL = "Brazil";
    const CROATIA = "Croatia";
    const VIET_NAM = "Viet Nam";
    const SAUDI_ARABIA = "Saudi Arabia";
    const ICELAND = "Iceland";
    const AUSTRALIA = "Australia";
    const GREECE = "Greece";
    const INDONESIA = "Indonesia";
    const CAMBODIA = "Cambodia";
    const LATVIA = "Latvia";
    const THAILAND = "Thailand";
    const GHANA = "Ghana";
    const FRANCE = "France";
    const ALGERIA = "Algeria";
    const TURKEY = "Turkey";
    const SERBIA = "Serbia";
    const ARMENIA = "Armenia";
    const HAITI = "Haiti";
    const PAKISTAN = "Pakistan";
    const FINLAND = "Finland";
    const SLOVAKIA = "Slovakia";
    const CZECHIA = "Czechia";
    const JORDAN = "Jordan";
    const SPAIN = "Spain";

    /**
     * Check if country exists.
     *
     * @param string $country
     * @return bool
     */
    public static function hasCountry(string $country): bool
    {
        return in_array($country, self::getCountries());
    }

    public static function getCountries()
    {
        return [
            self::UNITED_ARAB_EMIRATES,
            self::BANGLADESH,
            self::KUWAIT,
            self::PHILIPPINES,
            self::NEW_ZEALAND,
            self::BAHAMAS,
            self::ALBANIA,
            self::UGANDA,
            self::CHINA,
            self::INDIA,
            self::KAZAKHSTAN,
            self::CUBA,
            self::YEMEN,
            self::JAMAICA,
            self::LITHUANIA,
            self::URUGUAY,
            self::TUNISIA,
            self::HUNGARY,
            self::GREENLAND,
            self::UNITED_STATES,
            self::GUINEA,
            self::CANADA,
            self::NORWAY,
            self::BELARUS,
            self::SWITZERLAND,
            self::KOREA,
            self::SWEDEN,
            self::ZIMBABWE,
            self::EGYPT,
            self::NETHERLANDS,
            self::TAJIKISTAN,
            self::PANAMA,
            self::SOUTH_AFRICA,
            self::AFGHANISTAN,
            self::AZERBAIJAN,
            self::SINGAPORE,
            self::AUSTRIA,
            self::DENMARK,
            self::TURKMENISTAN,
            self::GERMANY,
            self::PUERTO_RICO,
            self::MEXICO,
            self::OMAN,
            self::ESTONIA,
            self::CHILE,
            self::UKRAINE,
            self::POLAND,
            self::CENTRAL_AFRICAN_REPUBLIC,
            self::GIBRALTAR,
            self::ANDORRA,
            self::IRAQ,
            self::ARGENTINA,
            self::GEORGIA,
            self::ANTARCTICA,
            self::PORTUGAL,
            self::JERSEY,
            self::HONG_KONG,
            self::CONGO,
            self::DOMINICAN_REPUBLIC,
            self::SLOVENIA,
            self::COSTA_RICA,
            self::JAPAN,
            self::BULGARIA,
            self::MONGOLIA,
            self::KIRIBATI,
            self::ROMANIA,
            self::ISRAEL,
            self::BELGIUM,
            self::QATAR,
            self::SOUTH_SUDAN,
            self::COLOMBIA,
            self::ECUADOR,
            self::KENYA,
            self::CYPRUS,
            self::MOROCCO,
            self::RUSSIA,
            self::ITALY,
            self::IRELAND,
            self::UNITED_KINGDOM,
            self::UZBEKISTAN,
            self::SOMALIA,
            self::BRAZIL,
            self::CROATIA,
            self::VIET_NAM,
            self::SAUDI_ARABIA,
            self::ICELAND,
            self::AUSTRALIA,
            self::GREECE,
            self::INDONESIA,
            self::CAMBODIA,
            self::LATVIA,
            self::THAILAND,
            self::GHANA,
            self::FRANCE,
            self::ALGERIA,
            self::TURKEY,
            self::SERBIA,
            self::ARMENIA,
            self::HAITI,
            self::PAKISTAN,
            self::FINLAND,
            self::SLOVAKIA,
            self::CZECHIA,
            self::JORDAN,
            self::SPAIN,
        ];
    }
}
