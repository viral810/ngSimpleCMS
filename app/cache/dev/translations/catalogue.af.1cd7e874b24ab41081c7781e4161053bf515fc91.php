<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('af', array (
  'validators' => 
  array (
    'This value should be false.' => 'Hierdie waarde moet vals wees.',
    'This value should be true.' => 'Hierdie waarde moet waar wees.',
    'This value should be of type {{ type }}.' => 'Hierdie waarde moet van die soort {{type}} wees.',
    'This value should be blank.' => 'Hierdie waarde moet leeg wees.',
    'The value you selected is not a valid choice.' => 'Die waarde wat jy gekies het is nie \'n geldige keuse nie.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Jy moet ten minste {{ limit }} kies.|Jy moet ten minste {{ limit }} keuses kies.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Jy moet by die meeste {{ limit }} keuse kies.|Jy moet by die meeste {{ limit }} keuses kies.',
    'One or more of the given values is invalid.' => 'Een of meer van die gegewe waardes is ongeldig.',
    'This field was not expected.' => 'Die veld is nie verwag nie.',
    'This field is missing.' => 'Hierdie veld ontbreek.',
    'This value is not a valid date.' => 'Hierdie waarde is nie \'n geldige datum nie.',
    'This value is not a valid datetime.' => 'Hierdie waarde is nie \'n geldige datum en tyd nie.',
    'This value is not a valid email address.' => 'Hierdie waarde is nie \'n geldige e-pos adres nie.',
    'The file could not be found.' => 'Die lêer kon nie gevind word nie.',
    'The file is not readable.' => 'Die lêer kan nie gelees word nie.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Die lêer is te groot ({{ size }} {{ suffix }}). Toegelaat maksimum grootte is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Die MIME-tipe van die lêer is ongeldig ({{ type }}). Toegelaat MIME-tipes is {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Hierdie waarde moet {{ limit }} of minder wees.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Hierdie waarde is te lank. Dit moet {{ limit }} karakter of minder wees.|Hierdie waarde is te lank. Dit moet {{ limit }} karakters of minder wees.',
    'This value should be {{ limit }} or more.' => 'Hierdie waarde moet {{ limit }} of meer wees.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Hierdie waarde is te kort. Dit moet {{ limit }} karakter of meer wees.|Hierdie waarde is te kort. Dit moet {{ limit }} karakters of meer wees.',
    'This value should not be blank.' => 'Hierdie waarde moet nie leeg wees nie.',
    'This value should not be null.' => 'Hierdie waarde moet nie nul wees nie.',
    'This value should be null.' => 'Hierdie waarde moet nul wees.',
    'This value is not valid.' => 'Hierdie waarde is nie geldig nie.',
    'This value is not a valid time.' => 'Hierdie waarde is nie \'n geldige tyd nie.',
    'This value is not a valid URL.' => 'Hierdie waarde is nie \'n geldige URL nie.',
    'The two values should be equal.' => 'Die twee waardes moet gelyk wees.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Die lêer is te groot. Toegelaat maksimum grootte is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Die lêer is te groot.',
    'The file could not be uploaded.' => 'Die lêer kan nie opgelaai word nie.',
    'This value should be a valid number.' => 'Hierdie waarde moet \'n geldige nommer wees.',
    'This file is not a valid image.' => 'Hierdie lêer is nie \'n geldige beeld nie.',
    'This is not a valid IP address.' => 'Hierdie is nie \'n geldige IP-adres nie.',
    'This value is not a valid language.' => 'Hierdie waarde is nie \'n geldige taal nie.',
    'This value is not a valid locale.' => 'Hierdie waarde is nie \'n geldige land instelling nie.',
    'This value is not a valid country.' => 'Hierdie waarde is nie \'n geldige land nie.',
    'This value is already used.' => 'Hierdie waarde word reeds gebruik.',
    'The size of the image could not be detected.' => 'Die grootte van die beeld kon nie opgespoor word nie.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Die beeld breedte is te groot ({{ width }}px). Toegelaat maksimum breedte is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Die beeld breedte is te klein ({{ width }}px). Minimum breedte verwag is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Die beeld hoogte is te groot ({{ height }}px). Toegelaat maksimum hoogte is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Die beeld hoogte is te klein ({{ height }}px). Minimum hoogte verwag is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Hierdie waarde moet die huidige wagwoord van die gebruiker wees.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Hierdie waarde moet presies {{ limit }} karakter wees.|Hierdie waarde moet presies {{ limit }} karakters wees.',
    'The file was only partially uploaded.' => 'Die lêer is slegs gedeeltelik opgelaai.',
    'No file was uploaded.' => 'Geen lêer is opgelaai nie.',
    'No temporary folder was configured in php.ini.' => 'Geen tydelike lêer is ingestel in php.ini nie.',
    'Cannot write temporary file to disk.' => 'Kan nie tydelike lêer skryf op skyf nie.',
    'A PHP extension caused the upload to fail.' => '\'n PHP-uitbreiding veroorsaak die oplaai van die lêer om te misluk.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Hierdie versameling moet {{ limit }} element of meer bevat.|Hierdie versameling moet {{ limit }} elemente of meer bevat.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Hierdie versameling moet {{ limit }} element of minder bevat.|Hierdie versameling moet {{ limit }} elemente of meer bevat.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Hierdie versameling moet presies {{ limit }} element bevat.|Hierdie versameling moet presies {{ limit }} elemente bevat.',
    'Invalid card number.' => 'Ongeldige kredietkaart nommer.',
    'Unsupported card type or invalid card number.' => 'Nie-ondersteunde tipe kaart of ongeldige kredietkaart nommer.',
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
    'fos_user.username.already_used' => 'The username is already used',
    'fos_user.username.blank' => 'Please enter a username',
    'fos_user.username.short' => '[-Inf,Inf]The username is too short',
    'fos_user.username.long' => '[-Inf,Inf]The username is too long',
    'fos_user.email.already_used' => 'The email is already used',
    'fos_user.email.blank' => 'Please enter an email',
    'fos_user.email.short' => '[-Inf,Inf]The email is too short',
    'fos_user.email.long' => '[-Inf,Inf]The email is too long',
    'fos_user.email.invalid' => 'The email is not valid',
    'fos_user.password.blank' => 'Please enter a password',
    'fos_user.password.short' => '[-Inf,Inf]The password is too short',
    'fos_user.password.mismatch' => 'The entered passwords don\'t match',
    'fos_user.new_password.blank' => 'Please enter a new password',
    'fos_user.new_password.short' => '[-Inf,Inf]The new password is too short',
    'fos_user.current_password.invalid' => 'The entered password is invalid',
    'fos_user.group.blank' => 'Please enter a name',
    'fos_user.group.short' => '[-Inf,Inf]The name is too short',
    'fos_user.group.long' => '[-Inf,Inf]The name is too long',
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
  'FOSUserBundle' => 
  array (
    'Bad credentials' => 'Invalid username or password',
    'group.edit.submit' => 'Update group',
    'group.show.name' => 'Group name',
    'group.new.submit' => 'Create group',
    'group.flash.updated' => 'The group has been updated',
    'group.flash.created' => 'The group has been created',
    'group.flash.deleted' => 'The group has been deleted',
    'security.login.username' => 'Username:',
    'security.login.password' => 'Password:',
    'security.login.remember_me' => 'Remember me',
    'security.login.submit' => 'Login',
    'profile.show.username' => 'Username',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Update',
    'profile.flash.updated' => 'The profile has been updated',
    'change_password.submit' => 'Change password',
    'change_password.flash.success' => 'The password has been changed',
    'registration.check_email' => 'An email has been sent to %email%. It contains an activation link you must click to activate your account.',
    'registration.confirmed' => 'Congrats %username%, your account is now activated.',
    'registration.back' => 'Back to the originating page.',
    'registration.submit' => 'Register',
    'registration.flash.user_created' => 'The user has been created successfully',
    'registration.email.subject' => 'Welcome %username%!',
    'registration.email.message' => 'Hello %username%!

To finish activating your account - please visit %confirmationUrl%

Regards,
the Team.
',
    'resetting.password_already_requested' => 'The password for this user has already been requested within the last 24 hours.',
    'resetting.check_email' => 'An email has been sent to %email%. It contains a link you must click to reset your password.',
    'resetting.request.invalid_username' => 'The username or email address "%username%" does not exist.',
    'resetting.request.username' => 'Username or email address:',
    'resetting.request.submit' => 'Reset password',
    'resetting.reset.submit' => 'Change password',
    'resetting.flash.success' => 'The password has been reset successfully',
    'resetting.email.subject' => 'Reset Password',
    'resetting.email.message' => 'Hello %username%!

To reset your password - please visit %confirmationUrl%

Regards,
the Team.
',
    'layout.logout' => 'Logout',
    'layout.login' => 'Login',
    'layout.register' => 'Register',
    'layout.logged_in_as' => 'Logged in as %username%',
    'form.group_name' => 'Group name:',
    'form.username' => 'Username:',
    'form.email' => 'Email:',
    'form.current_password' => 'Current password:',
    'form.password' => 'Password:',
    'form.password_confirmation' => 'Repeat password:',
    'form.new_password' => 'New password:',
    'form.new_password_confirmation' => 'Repeat new password:',
  ),
  'SonataUserBundle' => 
  array (
    'title_user_registration' => 'Register',
    'title_user_account' => 'User Profile',
    'title_user_edit_profile' => 'Edit',
    'title_user_authentication' => 'Authentication',
    'sonata_user_submit' => 'Submit',
    'breadcrumb.link_user_list' => 'Users',
    'breadcrumb.link_user_create' => 'Create',
    'breadcrumb.link_user_edit' => 'Edit',
    'breadcrumb.link_user_delete' => 'Delete',
    'breadcrumb.link_group_list' => 'Groups',
    'breadcrumb.link_group_create' => 'Create',
    'breadcrumb.link_group_edit' => 'Edit',
    'users' => 'Users',
    'groups' => 'Groups',
    'switch_user_exit' => 'Exit impersonating mode',
    'switch_user' => 'Impersonate User',
    'user_block_logout' => 'Logout',
    'form.label_username' => 'Username',
    'form.label_email' => 'E-Mail-Address',
    'form.label_plain_password' => 'Plain password',
    'form.label_groups' => 'Groups',
    'form.label_roles' => 'Roles',
    'form.label_locked' => 'Locked',
    'form.label_expired' => 'Expired',
    'form.label_enabled' => 'Enabled',
    'form.label_credentials_expired' => 'Credentials expired',
    'form.label_created_at' => 'Created at',
    'form.label_last_login' => 'Last login',
    'form.label_name' => 'Name',
    'filter.label_username' => 'Username',
    'filter.label_name' => 'Name',
    'filter.label_email' => 'E-Mail-Address',
    'filter.label_locked' => 'Locked',
    'filter.label_id' => 'ID',
    'filter.label_groups' => 'Groups',
    'filter.label_created_at' => 'Created at',
    'filter.label_last_login' => 'Last login',
    'filter.label_firstname' => 'Firstname',
    'filter.label_lastname' => 'Lastname',
    'list.label_username' => 'Username',
    'list.label_name' => 'Name',
    'list.label_email' => 'E-Mail-Address',
    'list.label_groups' => 'Groups',
    'list.label_locked' => 'Locked',
    'list.label_enabled' => 'Enabled',
    'list.label_created_at' => 'Created at',
    'list.label_last_login' => 'Last login',
    'list.label_impersonating' => 'Impersonate User',
    'list.label_roles' => 'Roles',
    'list.label_firstname' => 'Firstname',
    'list.label_lastname' => 'Lastname',
    'label_two_step_code' => 'Two-step verification',
    'message_two_step_code_help' => 'Enter the verification code generated by your mobile application.',
    'label_two_step_code_error' => 'The verification code is not valid',
    'sonata_user' => 'Users',
    'General' => 'General',
    'Groups' => 'Groups',
    'Management' => 'Management',
    'field.label_roles_editable' => 'Roles',
    'form.label_date_of_birth' => 'Date of birth',
    'form.label_firstname' => 'Firstname',
    'form.label_lastname' => 'Lastname',
    'form.label_website' => 'Website',
    'form.label_biography' => 'Biography',
    'form.label_gender' => 'Gender',
    'form.label_locale' => 'Locale',
    'form.label_timezone' => 'Timezone',
    'form.label_phone' => 'Phone',
    'form.label_facebook_uid' => 'Facebook Uid',
    'form.label_facebook_name' => 'Facebook Name',
    'form.label_twitter_uid' => 'Twitter Uid',
    'form.label_twitter_name' => 'Twitter Name',
    'form.label_gplus_uid' => 'Google+ Uid',
    'form.label_gplus_name' => 'Google+ Name',
    'form.label_token' => 'Token',
    'form.label_two_step_verification_code' => 'Two Step Verification Code',
    'show.label_username' => 'Username',
    'show.label_email' => 'Email',
    'show.label_groups' => 'Groups',
    'show.label_date_of_birth' => 'Date of birth',
    'show.label_firstname' => 'Firstname',
    'show.label_lastname' => 'Lastname',
    'show.label_website' => 'Website',
    'show.label_biography' => 'Biography',
    'show.label_gender' => 'Gender',
    'show.label_locale' => 'Locale',
    'show.label_timezone' => 'Timezone',
    'show.label_phone' => 'Phone',
    'show.label_facebook_uid' => 'Facebook Uid',
    'show.label_facebook_name' => 'Facebook Name',
    'show.label_twitter_uid' => 'Twitter Uid',
    'show.label_twitter_name' => 'Twitter Name',
    'show.label_gplus_uid' => 'Google+ Uid',
    'show.label_gplus_name' => 'Google+ Name',
    'show.label_token' => 'Token',
    'show.label_two_step_verification_code' => 'Two Step Verification Code',
    'show.label_created_at' => 'Created at',
    'show.label_last_login' => 'Last login',
    'breadcrumb.link_user_show' => 'Show',
    'gender_unknown' => 'unknown',
    'gender_female' => 'female',
    'gender_male' => 'male',
    'sonata_profile_title' => 'Dashboard',
    'link_show_profile' => 'Dashboard',
    'link_edit_profile' => 'Profile',
    'title_user_edit_authentication' => 'Authentication',
    'link_edit_authentication' => 'Authentication',
    'label_profile_gender' => 'Gender',
    'label_profile_firstname' => 'Firstname',
    'label_profile_lastname' => 'Lastname',
    'label_profile_website' => 'Website',
    'label_profile_dob' => 'Date of birth',
    'label_profile_biography' => 'Biography',
    'label_profile_locale' => 'Locale',
    'label_profile_timezone' => 'Timezone',
    'label_profile_phone' => 'Phone',
    'profile.flash.updated' => 'Your profile has been updated.',
    'sonata_change_password_link' => 'Change your password',
    'link_register' => 'Register',
    'link_login' => 'Log In',
    'link_logout' => 'Log out',
    'registration.flash.user_created' => 'Your account has been created successfully!',
    'forgotten_password' => 'Forgotten password?',
    'sonata_user_profile_breadcrumb_index' => 'Dashboard',
    'sonata_user_profile_breadcrumb_edit' => 'Edit profile',
    'sonata_user_already_authenticated' => 'You are already logged in',
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
