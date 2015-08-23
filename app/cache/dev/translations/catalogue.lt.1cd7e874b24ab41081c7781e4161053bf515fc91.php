<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('lt', array (
  'validators' => 
  array (
    'This value should be false.' => 'Reikšmė turi būti neigiama.',
    'This value should be true.' => 'Reikšmė turi būti teigiama.',
    'This value should be of type {{ type }}.' => 'Šios reikšmės tipas turi būti {{ type }}.',
    'This value should be blank.' => 'Ši reikšmė turi būti tuščia.',
    'The value you selected is not a valid choice.' => 'Neteisingas pasirinkimas.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Turite pasirinkti bent {{ limit }} variantą.|Turite pasirinkti bent {{ limit }} variantus.|Turite pasirinkti bent {{ limit }} variantų.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Turite pasirinkti ne daugiau kaip {{ limit }} variantą.|Turite pasirinkti ne daugiau kaip {{ limit }} variantus.|Turite pasirinkti ne daugiau kaip {{ limit }} variantų.',
    'One or more of the given values is invalid.' => 'Viena ar daugiau įvestų reikšmių yra netinkamos.',
    'This field was not expected.' => 'Nebuvo tikimasi Šis laukas.',
    'This field is missing.' => 'Šiame lauke yra dingęs.',
    'This value is not a valid date.' => 'Ši reikšmė nėra data.',
    'This value is not a valid datetime.' => 'Ši reikšmė nera data ir laikas.',
    'This value is not a valid email address.' => 'Ši reikšmė nėra tinkamas el. pašto adresas.',
    'The file could not be found.' => 'Byla nerasta.',
    'The file is not readable.' => 'Negalima nuskaityti bylos.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Byla yra per didelė ({{ size }} {{ suffix }}). Maksimalus dydis {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Netinkamas bylos tipas (mime type) ({{ type }}). Galimi bylų tipai {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Reikšmė turi būti {{ limit }} arba mažiau.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Per didelis simbolių skaičius. Turi susidaryti iš {{ limit }} arba mažiau simbolių.|Per didelis simbolių skaičius. Turi susidaryti iš {{ limit }} arba mažiau simbolių.|Per didelis simbolių skaičius. Turi susidaryti iš {{ limit }} arba mažiau simbolių.',
    'This value should be {{ limit }} or more.' => 'Reikšmė turi būti {{ limit }} arba daugiau.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Per mažas simbolių skaičius. Turi susidaryti iš {{ limit }} arba daugiau simbolių.|Per mažas simbolių skaičius. Turi susidaryti iš {{ limit }} arba daugiau simbolių.|Per mažas simbolių skaičius. Turi susidaryti iš {{ limit }} arba daugiau simbolių.',
    'This value should not be blank.' => 'Ši reikšmė negali būti tuščia.',
    'This value should not be null.' => 'Ši reikšmė negali būti null.',
    'This value should be null.' => 'Ši reikšmė turi būti null.',
    'This value is not valid.' => 'Netinkama reikšmė.',
    'This value is not a valid time.' => 'Ši reikšmė nėra laikas.',
    'This value is not a valid URL.' => 'Ši reikšmė nėra tinkamas interneto adresas.',
    'The two values should be equal.' => 'Abi reikšmės turi būti identiškos.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Byla yra per didelė. Maksimalus dydis yra {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Byla per didelė.',
    'The file could not be uploaded.' => 'Byla negali būti įkelta.',
    'This value should be a valid number.' => 'Ši reikšmė turi būti skaičius.',
    'This value is not a valid country.' => 'Ši reikšmė nėra tinkama šalis.',
    'This file is not a valid image.' => 'Byla nėra paveikslėlis.',
    'This is not a valid IP address.' => 'Ši reikšmė nėra tinkamas IP adresas.',
    'This value is not a valid language.' => 'Ši reikšmė nėra tinkama kalba.',
    'This value is not a valid locale.' => 'Ši reikšmė nėra tinkama lokalė.',
    'This value is already used.' => 'Ši reikšmė jau yra naudojama.',
    'The size of the image could not be detected.' => 'Nepavyko nustatyti nuotraukos dydžio.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Nuotraukos plotis per didelis ({{ width }}px). Maksimalus leidžiamas plotis yra {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Nuotraukos plotis per mažas ({{ width }}px). Minimalus leidžiamas plotis yra {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Nuotraukos aukštis per didelis ({{ height }}px). Maksimalus leidžiamas aukštis yra {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Nuotraukos aukštis per mažas ({{ height }}px). Minimalus leidžiamas aukštis yra {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Ši reikšmė turi sutapti su dabartiniu naudotojo slaptažodžiu.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Ši reikšmė turi turėti lygiai {{ limit }} simbolį.|Ši reikšmė turi turėti lygiai {{ limit }} simbolius.|Ši reikšmė turi turėti lygiai {{ limit }} simbolių.',
    'The file was only partially uploaded.' => 'Failas buvo tik dalinai įkeltas.',
    'No file was uploaded.' => 'Nebuvo įkelta jokių failų.',
    'No temporary folder was configured in php.ini.' => 'Nėra sukonfiguruoto jokio laikino katalogo php.ini faile.',
    'Cannot write temporary file to disk.' => 'Nepavyko išsaugoti laikino failo.',
    'A PHP extension caused the upload to fail.' => 'PHP plėtinys sutrukdė failo įkėlimą ir jis nepavyko.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Sąraše turi būti {{ limit }} arba daugiau įrašų.|Sąraše turi būti {{ limit }} arba daugiau įrašų.|Sąraše turi būti {{ limit }} arba daugiau įrašų.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Sąraše turi būti {{ limit }} arba mažiau įrašų.|Sąraše turi būti {{ limit }} arba mažiau įrašų.|Sąraše turi būti {{ limit }} arba mažiau įrašų.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Sąraše turi būti lygiai {{ limit }} įrašas.|Sąraše turi būti lygiai {{ limit }} įrašai.|Sąraše turi būti lygiai {{ limit }} įrašų.',
    'Invalid card number.' => 'Klaidingas kortelės numeris.',
    'Unsupported card type or invalid card number.' => 'Kortelės tipas nepalaikomas arba klaidingas kortelės numeris.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Ši reišmė neatitinka tarptautinio banko sąskaitos numerio formato (IBAN).',
    'This value is not a valid ISBN-10.' => 'Ši reikšmė neatitinka ISBN-10 formato.',
    'This value is not a valid ISBN-13.' => 'Ši reikšmė neatitinka ISBN-13 formato.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Ši reikšmė neatitinka nei ISBN-10, nei ISBN-13 formato.',
    'This value is not a valid ISSN.' => 'Ši reišmė neatitinka ISSN formato.',
    'This value is not a valid currency.' => 'Netinkamas valiutos formatas.',
    'This value should be equal to {{ compared_value }}.' => 'Ši reikšmė turi būti lygi {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Ši reikšmė turi būti didesnė už {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Ši reikšmė turi būti didesnė už arba lygi {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ši reikšmė turi būti identiška {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Ši reikšmė turi būti mažesnė už {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Ši reikšmė turi būti mažesnė už arba lygi {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ši reikšmė neturi būti lygi {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ši reikšmė neturi būti identiška {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Nuotraukos santykis yra per didelis ({{ ratio }}). Didžiausias leistinas santykis yra {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Nuotraukos santykis yra per mažas ({{ ratio }}). Mažiausias leistinas santykis yra {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Nuotrauka yra kvadratinė ({{ width }}x{{ height }}px). Kvadratinės nuotraukos nėra leistinos.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Nuotrauka orientuota į plotį ({{ width }}x{{ height }}px). Nuotraukos orientuotos į plotį nėra leistinos.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Nuotrauka orientuota į aukštį ({{ width }}x{{ height }}px). Nuotraukos orientuotos į aukštį nėra leistinos.',
    'An empty file is not allowed.' => 'Failas negali būti tuščias.',
    'This form should not contain extra fields.' => 'Forma negali turėti papildomų laukų.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Įkelta byla yra per didelė. bandykite įkelti mažesnę.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF kodas nepriimtinas. Bandykite siųsti formos užklausą dar kartą.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Įvyko autentifikacijos klaida.',
    'Authentication credentials could not be found.' => 'Nepavyko rasti autentifikacijos duomneų.',
    'Authentication request could not be processed due to a system problem.' => 'Autentifikacijos užklausos nepavyko įvykdyti dėl sistemos klaidų.',
    'Invalid credentials.' => 'Klaidingi duomenys.',
    'Cookie has already been used by someone else.' => 'Slapukas buvo panaudotas kažkam kitam.',
    'Not privileged to request the resource.' => 'Neturite teisių pasiektį resursą.',
    'Invalid CSRF token.' => 'Neteisingas CSRF raktas.',
    'Digest nonce has expired.' => 'Prieigos kodas yra pasibaigęs.',
    'No authentication provider found to support the authentication token.' => 'Nerastas autentifikacijos tiekėjas, kuris palaikytų autentifikacijos raktą.',
    'No session available, it either timed out or cookies are not enabled.' => 'Sesija yra nepasiekiama, pasibaigė galiojimo laikas arba slapukai yra išjungti.',
    'No token could be found.' => 'Nepavyko rasti rakto.',
    'Username could not be found.' => 'Tokio naudotojo vardo nepavyko rasti.',
    'Account has expired.' => 'Paskyros galiojimo laikas baigėsi.',
    'Credentials have expired.' => 'Autentifikacijos duomenų galiojimo laikas baigėsi.',
    'Account is disabled.' => 'Paskyra yra išjungta.',
    'Account is locked.' => 'Paskyra yra užblokuota.',
  ),
  'SonataCoreBundle' => 
  array (
    'link_add' => 'Sukurti naują',
    'label_type_yes' => 'taip',
    'label_type_no' => 'ne',
    'sonata_core_template_box_file_found_in' => 'sonata_core_template_box_file_found_in',
    'label_type_equals' => 'yra lygus',
    'label_type_not_equals' => 'nelygus',
    'date_range_start' => 'date_range_start',
    'date_range_end' => 'date_range_end',
  ),
  'SonataAdminBundle' => 
  array (
    'sonata_administration' => 'Valdymas',
    'action_delete' => 'Ištrinti',
    'btn_batch' => 'Vykdyti',
    'btn_create' => 'Sukurti',
    'btn_create_and_edit_again' => 'Sukurti ir redaguoti',
    'btn_create_and_create_a_new_one' => 'Sukurti ir kurti naują',
    'btn_create_and_return_to_list' => 'Sukurti ir eiti į sąrašą',
    'btn_filter' => 'Filtruoti',
    'btn_update' => 'Saugoti',
    'btn_update_and_edit_again' => 'Saugoti',
    'btn_update_and_return_to_list' => 'Saugoti ir uždaryti',
    'link_delete' => 'Ištrinti',
    'link_action_create' => 'Sukurti naują',
    'link_action_list' => 'Grįžti į sąrašą',
    'link_action_show' => 'Rodyti',
    'link_action_edit' => 'Redaguoti',
    'link_add' => 'Sukurti naują',
    'link_list' => 'Sąrašas',
    'link_reset_filter' => 'Atšaukti',
    'title_create' => 'Sukurti',
    'title_dashboard' => 'Titulinis',
    'title_edit' => 'Redaguojama "%name%"',
    'title_list' => 'Sąrašas',
    'link_next_pager' => 'Kitas',
    'link_previous_pager' => 'Ankstesnis',
    'link_first_pager' => 'Pirmas',
    'link_last_pager' => 'Paskutinis',
    'Admin' => 'Administravimas',
    'link_expand' => 'išskleisti/suskleisti',
    'no_result' => 'Nėra rezultatų',
    'confirm_msg' => 'Ar Jūs įsitikinęs?',
    'action_edit' => 'Redaguoti',
    'action_show' => 'Rodyti',
    'all_elements' => 'Visi',
    'flash_batch_empty' => 'Nepasirinktas nei vienas įrašas - veiksmai atšaukiami.',
    'flash_create_success' => 'Sėkmingai sukurta.',
    'flash_create_error' => 'Kūrimo metu įvyko klaida.',
    'flash_edit_success' => 'Sėkmingai išsaugota.',
    'flash_edit_error' => 'Išsaugant įrašą įvyko klaida.',
    'flash_batch_delete_success' => 'Pasirinkti įrašai sėkmingai ištrinti.',
    'flash_batch_delete_error' => 'Trinant Jūsų pasirinktus įrašus įvyko klaida.',
    'flash_delete_error' => 'Trinant įrašą įvyko klaida.',
    'flash_delete_success' => 'Įrašas sėkmingai ištrintas.',
    'breadcrumb.link_dashboard' => '⌂',
    'title_delete' => 'Trynimo patvirtinimas',
    'message_delete_confirmation' => 'Ar Jūs tkrai norite ištrinti pasirinktą elementą?',
    'btn_delete' => 'Taip, ištrinti',
    'title_batch_confirmation' => 'Keleto veiksmų patvirtinimas',
    'message_batch_confirmation' => 'Ar tikrai norite atlikti šį veiksmą su pažymėtam įrašui?|Ar tikrai norite patvirtinti šį veiksmą ir įvykdyti %count% pažymėtiems elementams?|Ar tikrai norite patvirtinti šį veiksmą ir įvykdyti %count% pažymėtų elementų?',
    'message_batch_all_confirmation' => 'Ar tikrai norite patvirtinti šį veiksmą ir įvykdyti jį visiems įrašams?',
    'btn_execute_batch_action' => 'Taip, vykdyti',
    'label_type_yes' => 'taip',
    'label_type_no' => 'ne',
    'label_type_contains' => 'turi',
    'label_type_not_contains' => 'neturi',
    'label_type_equals' => 'yra lygus',
    'label_type_not_equals' => 'nelygus',
    'label_type_equal' => '=',
    'label_type_greater_equal' => '>=',
    'label_type_greater_than' => '>',
    'label_type_less_equal' => '<=',
    'label_type_less_than' => '<',
    'label_date_type_equal' => '=',
    'label_date_type_greater_equal' => '>=',
    'label_date_type_greater_than' => '>',
    'label_date_type_less_equal' => '<=',
    'label_date_type_less_than' => '<',
    'label_date_type_null' => 'yra tuščia',
    'label_date_type_not_null' => 'nėra tuščia',
    'label_date_type_between' => 'tarp',
    'label_date_type_not_between' => 'nėra tarp',
    'label_filters' => 'Filtrai',
    'delete_or' => 'arba',
    'link_action_history' => 'Revizijos',
    'td_action' => 'Veiksmas',
    'td_revision' => 'Revizijos',
    'td_timestamp' => 'Data',
    'td_username' => 'Autorius',
    'label_view_revision' => 'Peržiūrėti reviziją',
    'list_results_count' => '1 rezultatas|%count% resultatai|%count% resultatų',
    'label_export_download' => 'Atsisiųsti',
    'loading_information' => 'Informacija ruošiama…',
    'btn_preview' => 'Peržiūrėti',
    'btn_preview_approve' => 'Patvirtinti',
    'btn_preview_decline' => 'Atmesti',
    'label_per_page' => 'per psl.',
    'list_select' => 'Pasirinkite',
    'confirm_exit' => 'Esate neišsaugojęs pakeitimų',
    'link_edit_acl' => 'Redaguoti ACL',
    'btn_update_acl' => 'Atnaujinti ACL',
    'flash_acl_edit_success' => 'ACL sėkmingai atnaujintas.',
    'link_action_acl' => 'ACL',
    'short_object_description_placeholder' => 'Nepasirinkta',
    'title_search_results' => 'Paieškos rezultatai: %query%',
    'search_placeholder' => 'Paieška',
    'no_results_found' => 'atitikmenų nerasta',
    'add_new_entry' => 'sukurti įrašą',
    'link_actions' => 'Veiksmai',
    'noscript_warning' => 'noscript_warning',
    'message_form_group_empty' => 'message_form_group_empty',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce has expired.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'CmfRoutingBundle' => 
  array (
    'dashboard.cmf' => 'Symfony CMF',
    'dashboard.label_routing' => 'Route',
    'dashboard.label_redirect_routing' => 'Redirect Route',
    'breadcrumb.link_route_list' => 'Routes',
    'breadcrumb.link_route_create' => 'Create',
    'breadcrumb.link_route_edit' => 'Edit',
    'breadcrumb.link_route_delete' => 'Delete',
    'breadcrumb.link_redirect_route_list' => 'Redirect Routes',
    'breadcrumb.link_redirect_route_create' => 'Create',
    'breadcrumb.link_redirect_route_edit' => 'Edit',
    'breadcrumb.link_redirect_route_delete' => 'Delete',
    'filter.label_name' => 'Name',
    'list.label_path' => 'URL',
    'form.group_general' => 'General',
    'form.group_advanced' => 'Advanced',
    'form.label_parent' => 'Parent',
    'form.label_name' => 'Last URL part',
    'form.label_variable_pattern' => 'Variable pattern',
    'form.help_variable_pattern' => 'A pattern in the format {variable}/{more}... The fields are passed to the controller if it declares them as arguments.',
    'form.label_content' => 'Content',
    'form.label_defaults' => 'Defaults',
    'form.label_options' => 'Options',
    'form.label_route_name' => 'Name',
    'form.label_uri' => 'URI',
    'form.label_route_target' => 'Route target',
    'form.group_routes' => 'Routes',
    'form.label_routes' => 'Routes',
    'form.label_add_locale_pattern' => 'Add locale pattern',
    'form.label_add_format_pattern' => 'Add format pattern',
    'form.label_add_trailing_slash' => 'Add trailing slash',
    'form.help_options' => '
            
            Locale: Prepend locale to route like /{locale}/your/route<br/>
            Format: Append format to route like /your/route.{format}. Default format is \'html\'<br/>
            Slash: Append a trailing slash to route like /your/route/
            
        ',
    'admin.menu_frontend_link_caption' => 'Frontend',
    'admin.menu_frontend_link_title' => 'Open frontend view in new tab',
  ),
  'SonataCoreBundle' => 
  array (
    'link_add' => 'Add new',
    'label_type_yes' => 'yes',
    'label_type_no' => 'no',
    'sonata_core_template_box_file_found_in' => 'This file can be found in',
    'label_type_equals' => 'is equal to',
    'label_type_not_equals' => 'is not equal to',
    'date_range_start' => 'From',
    'date_range_end' => 'To',
  ),
  'SonataAdminBundle' => 
  array (
    'sonata_administration' => 'Administration',
    'action_delete' => 'Delete',
    'btn_batch' => 'OK',
    'btn_create' => 'Create',
    'btn_create_and_edit_again' => 'Create',
    'btn_create_and_create_a_new_one' => 'Create and add another',
    'btn_create_and_return_to_list' => 'Create and return to list',
    'btn_filter' => 'Filter',
    'btn_update' => 'Update',
    'btn_update_and_edit_again' => 'Update',
    'btn_update_and_return_to_list' => 'Update and close',
    'link_delete' => 'Delete',
    'link_action_create' => 'Add new',
    'link_action_list' => 'Return to list',
    'link_action_show' => 'Show',
    'link_action_edit' => 'Edit',
    'link_add' => 'Add new',
    'link_list' => 'List',
    'link_reset_filter' => 'Reset',
    'title_create' => 'Create',
    'title_dashboard' => 'Dashboard',
    'title_edit' => 'Edit "%name%"',
    'title_list' => 'List',
    'link_next_pager' => 'Next',
    'link_previous_pager' => 'Previous',
    'link_first_pager' => 'First',
    'link_last_pager' => 'Last',
    'Admin' => 'Admin',
    'link_expand' => 'expand/collapse',
    'no_result' => 'No result',
    'confirm_msg' => 'Are you sure ?',
    'action_edit' => 'Edit',
    'action_show' => 'Show',
    'all_elements' => 'All elements',
    'flash_batch_empty' => 'Action aborted. No items were selected.',
    'flash_create_success' => 'Item "%name%" has been successfully created.',
    'flash_create_error' => 'An error has occurred during the creation of item "%name%".',
    'flash_edit_success' => 'Item "%name%" has been successfully updated.',
    'flash_edit_error' => 'An error has occurred during update of item "%name%".',
    'flash_batch_delete_success' => 'Selected items have been successfully deleted.',
    'flash_batch_delete_error' => 'An Error has occurred during selected items deletion.',
    'flash_delete_error' => 'An Error has occurred during deletion of item "%name%".',
    'flash_delete_success' => 'Item "%name%" has been deleted successfully.',
    'breadcrumb.link_dashboard' => '<i class="fa fa-home"></i>',
    'title_delete' => 'Confirm deletion',
    'message_delete_confirmation' => 'Are you sure you want to delete the selected "%object%" element?',
    'btn_delete' => 'Yes, delete',
    'title_batch_confirmation' => 'Confirm batch action \'%action%\'',
    'message_batch_confirmation' => 'Are you sure you want to confirm this action and execute it for the selected element?|Are you sure you want to confirm this action and execute it for the %count% selected elements?',
    'message_batch_all_confirmation' => 'Are you sure you want to confirm this action and execute it for all the elements?',
    'btn_execute_batch_action' => 'Yes, execute',
    'label_type_yes' => 'yes',
    'label_type_no' => 'no',
    'label_type_contains' => 'contains',
    'label_type_not_contains' => 'does not contain',
    'label_type_equals' => 'is equal to',
    'label_type_not_equals' => 'is not equal to',
    'label_type_equal' => '=',
    'label_type_greater_equal' => '>=',
    'label_type_greater_than' => '>',
    'label_type_less_equal' => '<=',
    'label_type_less_than' => '<',
    'label_date_type_equal' => '=',
    'label_date_type_greater_equal' => '>=',
    'label_date_type_greater_than' => '>',
    'label_date_type_less_equal' => '<=',
    'label_date_type_less_than' => '<',
    'label_date_type_null' => 'is empty',
    'label_date_type_not_null' => 'is not empty',
    'label_date_type_between' => 'between',
    'label_date_type_not_between' => 'not between',
    'label_filters' => 'Filters',
    'delete_or' => 'or',
    'link_action_history' => 'Revisions',
    'td_action' => 'Action',
    'td_compare' => 'Compare',
    'td_revision' => 'Revisions',
    'td_timestamp' => 'Date',
    'td_username' => 'Author',
    'label_view_revision' => 'View Revision',
    'label_compare_revision' => 'Compare revision',
    'list_results_count' => '1 result|%count% results',
    'label_export_download' => 'Download',
    'loading_information' => 'Loading information…',
    'btn_preview' => 'Preview',
    'btn_preview_approve' => 'Approve',
    'btn_preview_decline' => 'Decline',
    'label_per_page' => 'Per page',
    'list_select' => 'Select',
    'confirm_exit' => 'You have unsaved changes.',
    'link_edit_acl' => 'Edit ACL',
    'btn_update_acl' => 'Update ACL',
    'flash_acl_edit_success' => 'ACL has been successfuly updated.',
    'link_action_acl' => 'ACL',
    'short_object_description_placeholder' => 'No selection',
    'title_search_results' => 'Search results: %query%',
    'search_placeholder' => 'Search',
    'no_results_found' => 'no result found',
    'add_new_entry' => 'add new entry',
    'link_actions' => 'Actions',
    'noscript_warning' => 'Javascript is disabled in your web browser. Some features will not work properly.',
    'message_form_group_empty' => 'No fields available.',
  ),
  'SonataDoctrinePHPCRAdmin' => 
  array (
    'content_tree' => 'Content',
    'reset_tree' => 'Reset',
    'create_item' => 'Create',
    'delete_item' => 'Delete',
    'confirm_move_node' => 'Really move that node?',
    'list_results_count_prefix' => 'at least',
    'not_editable' => '(not editable)',
    'label_type_contains_words' => 'contains words',
  ),
  'CmfCoreBundle' => 
  array (
    'form.group_publish_workflow' => 'Publish Workflow',
    'form.label_publishable' => 'Publishable',
    'form.label_publish_start_date' => 'Publish from',
    'form.label_publish_end_date' => 'Publish until',
    'form.label_locale' => 'Locale',
    'form.help_publish_start_date' => 'Only publish on or after this date, leave empty to immediately publish',
    'form.help_publish_end_date' => 'Only publish before this date, leave empty to not end publishing',
    'list.label_locales' => 'Locales',
  ),
  'CmfMenuBundle' => 
  array (
    'dashboard.cmf' => 'Symfony CMF',
    'dashboard.label_menu' => 'Menus',
    'dashboard.label_menu_node' => 'Menu node',
    'breadcrumb.link_menu_list' => 'Menus',
    'breadcrumb.link_menu_create' => 'Create',
    'breadcrumb.link_menu_edit' => 'Edit',
    'breadcrumb.link_menu_delete' => 'Delete',
    'breadcrumb.link_menu_node_list' => 'Menu nodes',
    'breadcrumb.link_menu_node_create' => 'Create',
    'breadcrumb.link_menu_node_edit' => 'Edit',
    'breadcrumb.link_menu_node_delete' => 'Delete',
    'list.label_id' => 'Id',
    'list.label_name' => 'Name',
    'list.label_label' => 'Label',
    'list.label_uri' => 'URI',
    'list.label_route' => 'Route',
    'form.group_general' => 'General',
    'form.group_items' => 'Items',
    'form.label_children' => 'Items',
    'form.label_parent' => 'Parent',
    'form.label_name' => 'Name',
    'form.label_label' => 'Label',
    'form.label_uri' => 'URI',
    'form.label_route' => 'Route',
    'form.label_parameters' => 'Route parameters',
    'form.label_content' => 'Content',
    'form.label_link_type' => 'Link type',
    'form.label_weak' => 'Weak association',
    'help.items_help' => 'Click on item to edit, right click to create new items.',
    'form.group_menus' => 'Menu',
    'form.label_menu_nodes' => 'Menu',
    'form.group_menu_options' => 'Menu Options',
    'form.label_display' => 'Display',
    'form.help_display' => 'A menu entry is only displayed if the label is not empty.',
    'form.label_display_children' => 'Display Children',
    'form.help_display_children' => 'Children are only displayed if the menu entry itself is displayed.',
    'form.label_attributes' => 'Menu attributes',
    'form.label_label_attributes' => 'Label attributes',
    'form.label_children_attributes' => 'Children attributes',
    'form.label_link_attributes' => 'Link attributes',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
