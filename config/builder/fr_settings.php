<?php

/** LANGUAGE SETTINGS **/
define('LANGUAGE', 'fr');
define('LANGUAGE_MARKET_YAHOO', 'fr-fr');
define('TRANSLATE_LANGUAGES', 'en,es'); // Not very scalable

/** WIKTIONARY RELATED SETTINGS **/

// Identifier language DOM Wiktionary
define('WIKTIONARY_ID_LANGUAGE','Fran.C3.A7ais');
define('WIKTIONARY_ID_COMMON_NAME', 'Nom_commun');
define('WIKTIONARY_ID_VERB', 'Verbe');
define('WIKTIONARY_ID_USE', 'emploi');
define('WIKTIONARY_ID_SOURCES', 'sources');
define('WIKTIONARY_ID_TEXT', 'texte');

define('WIKTIONARY_FORM_OF', 'ligne-de-forme');
define('WIKTIONARY_FORM_MASCULINE', 'masculin');
define('WIKTIONARY_FORM_MASCULINE_PLURAL', 'masculin pluriel');
define('WIKTIONARY_FORM_FEMENINE', 'féminin');
define('WIKTIONARY_FORM_FEMENINE_PLURAL', 'féminin pluriel');
define('WIKTIONARY_FORM_MASCULINE_FEMENINE', 'masculin et féminin identiques');

define('WIKTIONARY_RELATED_WORDS', 'Apparent.C3.A9s_.C3.A9tymologiques');
define('WIKTIONARY_SYNONYMS', 'Synonymes');
define('WIKTIONARY_ANTONYMS', 'Antonymes');
define('WIKTIONARY_DERIVED', 'D.C3.A9riv.C3.A9s');

define('WIKTIONARY_VERBS_IMPERSONALS', 'Modes_impersonnels');
define('WIKTIONARY_VERBS_INDICATIVE', 'Indicatif');
define('WIKTIONARY_VERBS_SUBJUNCTIVE', 'Subjonctif');
define('WIKTIONARY_VERBS_CONDITIONAL', 'Conditionnel');
define('WIKTIONARY_VERBS_IMPERATIVE', 'Imp.C3.A9ratif');


// DOM messages
define('WIKTIONARY_NEXT_PAGE', 'page suivante');

// Identifiers forms DOM Wiktionary
define('WIKTIONARY_ETIMOLOGY', '.C3.89tymologie');

define('WIKTIONARY_COMMON_NAME', 'Nom_commun');
define('WIKTIONARY_COMMON_NAME_FORM', 'Forme_de_nom_commun');

define('WIKTIONARY_VERB', 'Verbe');
define('WIKTIONARY_VERB_FORM', 'Forme_de_verbe');

define('WIKTIONARY_ARTICLE_DEFINED', 'Article_d.C3.A9fini');
define('WIKTIONARY_ARTICLE_UNDEFINED', 'Article_ind.C3.A9fini');
define('WIKTIONARY_ARTICLE_PARTITIVE', 'Article_partitif');

define('WIKTIONARY_ADJECTIVE', 'Adjectif');
define('WIKTIONARY_ADJECTIVE_FORM', 'Forme_d.E2.80.99adjectif');
define('WIKTIONARY_ADJECTIVE_DEMONSTRATIVE', 'Adjectif_d.C3.A9monstratif');
define('WIKTIONARY_ADJECTIVE_EXCLAMATIVE', 'Adjectif_exclamatif');
define('WIKTIONARY_ADJECTIVE_UNDEFINED', 'Adjectif_ind.C3.A9fini');
define('WIKTIONARY_ADJECTIVE_INTERROGATIVE', 'Adjectif_interrogatif');
define('WIKTIONARY_ADJECTIVE_NUMERAL', 'Adjectif_num.C3.A9ral');
define('WIKTIONARY_ADJECTIVE_POSSESSIVE', 'Adjectif_possessif');

define('WIKTIONARY_CONJUCTION', 'Conjonction');
define('WIKTIONARY_INTERJECTION', 'Interjection');

define('WIKTIONARY_PREPOSITION', 'Pr.C3.A9position');
define('WIKTIONARY_PREPOSITION_2', 'Préposition');

define('WIKTIONARY_ADVERBE', 'Adverbe');
define('WIKTIONARY_ADVERBE_INTERROGATIVE', 'Adverbe_interrogatif');
define('WIKTIONARY_PARTICULE', 'Particule');

define('WIKTIONARY_LOCUTION_PHRASE', 'Locution-phrase');
define('WIKTIONARY_LOCUTION_INTERJECTIVE', 'Locution_interjective');
define('WIKTIONARY_LOCUTION_ADVERBIAL', 'Locution_adverbiale');
define('WIKTIONARY_LOCUTION_ADJECTIVAL', 'Locution_adjectivale');
define('WIKTIONARY_LOCUTION_NOMINAL', 'Locution_nominale');
define('WIKTIONARY_LOCUTION_CONJUNCTIVE', 'Locution_conjonctive');
define('WIKTIONARY_LOCUTION_PREPOSITIVE', 'Locution_pr.C3.A9positive');
define('WIKTIONARY_LOCUTION_VERBAL', 'Locution_verbale');
define('WIKTIONARY_PROVERBE', 'Proverbe');

define('WIKTIONARY_PRONOUN_PERSONAL', 'Pronom_personnel');
define('WIKTIONARY_PRONOUN_UNDEFINED', 'Pronom_ind.C3.A9fini');

define('WIKTIONARY_CATEGORY_URL_BASE', 'http://fr.wiktionary.org/wiki/Cat%C3%A9gorie:');
define('WIKTIONARY_CONJUGATIONS_URL_BASE', 'http://fr.wiktionary.org/wiki/Annexe:Conjugaison_en_français/');

// CATEGORIES
define('WIKTIONARY_CATEGORY_VERBS', 'Verbes_en_fran%C3%A7ais');

// Wiktionary category urls to retrieve the words from, we'll base on grammar supra category, from where we'll retrieve
// adjectives, adverbs, names, verbes, etc.
// we leave out common names, etc.
function getCategories() {

    // Note, we'll later add WIKTIONARY_CATEGORY_BASE to each URL

    $categories = array(

        // MAIN
        'Noms_communs_en_fran%C3%A7ais', // common names
        'Adjectifs_en_fran%C3%A7ais', // adjectives
        'Adverbes_en_fran%C3%A7ais', // adverbes
        'Verbes_en_fran%C3%A7ais', // verbes

        // ARTICLES
        'Articles_d%C3%A9finis_en_fran%C3%A7ais', // defined articles
        'Articles_ind%C3%A9finis_en_fran%C3%A7ais', // undefined articles
        'Articles_partitifs_en_fran%C3%A7ais', // articles partitifs

        // ADJECTIVES
        'Adjectifs_d%C3%A9monstratifs_en_fran%C3%A7ais', // demostrative adjectives
        'Adjectifs_exclamatifs_en_fran%C3%A7ais', // exclamative adjectives
        'Adjectifs_ind%C3%A9finis_en_fran%C3%A7ais', // undefined adjectives
        'Adjectifs_interrogatifs_en_fran%C3%A7ais', // interrogative adjectives
        'Adjectifs_num%C3%A9raux_en_fran%C3%A7ais', // numeral adjectives
        'Adjectifs_possessifs_en_fran%C3%A7ais', // possessive adjectives

        // CONJUNCTIONS / INTERJECTIONS
        'Conjonctions_en_fran%C3%A7ais', // conjunctions
        'Interjections_en_fran%C3%A7ais', // interjections

        // INTERROGATIVES
        'Adverbes_interrogatifs_en_fran%C3%A7ais', // adverbes interrogatives
        'Interrogatifs_en_fran%C3%A7ais', // interrogatives
        'Pronoms_interrogatifs_en_fran%C3%A7ais', // pronouns interrogatives

        // EXPRESSIONS / LOCUTIONS
        'Locutions_adjectivales_en_fran%C3%A7ais', // adjective locutions
        'Locutions_adverbiales_en_fran%C3%A7ais', // adverbial locutions
        'Locutions_conjonctives_en_fran%C3%A7ais', // conjunction locutions
        'Locutions_interjectives_en_fran%C3%A7ais', // interjection locutions
        'Locutions_nominales_en_fran%C3%A7ais', // name locutions
        'Locutions_pr%C3%A9positives_en_fran%C3%A7ais', // preposition locutions
        'Locutions_verbales_en_fran%C3%A7ais', // verb locutions
        'Locutions-phrases_en_fran%C3%A7ais', // locution phrases
        'Proverbes_en_fran%C3%A7ais', // proverbes
        'Expressions_en_fran%C3%A7ais', // expressions

        // CIRCUMLOCUTIONS
        'P%C3%A9riphrases_en_fran%C3%A7ais', // circumlocutions
        'P%C3%A9riphrases_d%C3%A9signant_des_pays_en_fran%C3%A7ais', // circumlocutions countries
        'P%C3%A9riphrases_d%C3%A9signant_des_villes_en_fran%C3%A7ais', // circumlocutions french cities

        // NEGATIONS
        'N%C3%A9gations_en_fran%C3%A7ais', // negations

        // PARTICULES
        'Particules_en_fran%C3%A7ais', // particules

        // PREPOSITIONS
        'Pr%C3%A9positions_en_fran%C3%A7ais' // prepositions

    );

    return $categories;
}

// We'll save, too, the words from categories that we don't want to
// be saved on more general categories. Example, gentilics on names
function getInvalidCategories() {

    $categories = array(

        // MAIN
        'Gentilés_en_français', // Gentilics
        'Noms_indénombrables_en_français'

    );

    return $categories;
}

function getFrequentCategories() {

    $categories = array(

        // MAIN
        'Noms_communs_en_fran%C3%A7ais', // common names
        'Adjectifs_en_fran%C3%A7ais', // adjectives
        'Adverbes_en_fran%C3%A7ais', // adverbes
        'Verbes_en_fran%C3%A7ais' // verbes

    );

    return $categories;
}