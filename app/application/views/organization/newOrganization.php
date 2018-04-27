<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		
		<div class="col-md-12">
			<?php if (!isset($org['id'])):?>
				<h1>Create Organization</h1>
			<?php else : ?>
			<h1>Edit Organization</h1>
			<?php endif; ?>
			<?php
			if (!isset($org['id'])){
				$org['id']='';
				$org['name']='';
				$org['description']='';
				$org['noofpeople']='';
				$org['address']='';
				$org['City']='';
				$org['State']='';
				$org['Country']='';
				$org['zip']='';
			}
                    echo form_open('organization/neworganization');
                    echo"<table class='table'>";
					echo form_hidden('id',$org['id']);
                    echo"<tr><td>";
					echo form_label('Name:');
					echo "</td><td>";
                    $data_name = array(
                        'name' => 'name',
                        'id' => 'name',
                        'type' => 'text',
                        'size'=>'40',
                        'class'=>'input-group',
                        'value'=>$org['name']
                       
                    );

                    echo form_input($data_name);
                    echo "</td><td>";
                    echo form_error('name');
                    echo"</td></tr>";


                    echo"<tr><td>";
					echo form_label('Description:');
					echo "</td><td colspan='2'>";
                    $data_desc = array(
                        'name' => 'desc',
                        'id' => 'desc',
                        'class'=>'input-group',
                        'rows'=>3,
                        'cols'=>40,
                        'value'=>$org['description']
                    );

                    echo form_textarea($data_desc);

                    echo"</td></tr>";

                    echo"<tr><td>";
					echo form_label('No of People:');
					echo "</td><td>";
                    $data_nop = array(
                        'name' => 'noofpeople',
                        'id' => 'noofpeople',
                        'type' => 'text',
                        'size'=>'10',
                        'class'=>'input-group',
                        'value'=>$org['noofpeople']
                    );

                    echo form_input($data_nop);
                    echo "</td><td>";
                    echo form_error('noofpeople');
                    echo"</td></tr>";

                    echo"<tr><td>";
					echo form_label('Address: ');
					echo "</td><td >";
                    $data_add = array(
                        'name' => 'address',
                        'id' => 'address',
                        'class'=>'input-group',
                        'rows'=>3,
                        'cols'=>40,
                        'value'=>$org['address']

                        
                    );

                    echo form_textarea($data_add);
                    echo "</td><td>";
                    echo form_error('address');
                    echo"</td></tr>";

                    echo"<tr ><td>";
					echo form_label('City:');
					echo "</td><td colspan='2'>";
                    $data_city = array(
                        'name' => 'city',
                        'id' => 'city',
                        'type' => 'text',
                        'size'=>'16',
                        'class'=>'input-group',
                        'value'=>$org['City']
                       
                    );

                    echo form_input($data_city);
                    echo "</td><td>";
                    echo form_error('city');
                    echo"</td></tr>";

                    echo"<tr><td>";
					echo form_label('State:');
					echo "</td><td colspan='2'>";
                    $data_state = array(
                    	'AL'=>'Alabama',
				        'AK'=>'Alaska',
				        'AZ'=>'Arizona',
				        'AR'=>'Arkansas',
				        'CA'=>'California',
				        'CO'=>'Colorado',
				        'CT'=>'Connecticut',
				        'DE'=>'Delaware',
				        'DC'=>'District Of Columbia',
				        'FL'=>'Florida',
				        'GA'=>'Georgia',
				        'HI'=>'Hawaii',
				        'ID'=>'Idaho',
				        'IL'=>'Illinois',
				        'IN'=>'Indiana',
				        'IA'=>'Iowa',
				        'KS'=>'Kansas',
				        'KY'=>'Kentucky',
				        'LA'=>'Louisiana',
				        'ME'=>'Maine',
				        'MD'=>'Maryland',
				        'MA'=>'Massachusetts',
				        'MI'=>'Michigan',
				        'MN'=>'Minnesota',
				        'MS'=>'Mississippi',
				        'MO'=>'Missouri',
				        'MT'=>'Montana',
				        'NE'=>'Nebraska',
				        'NV'=>'Nevada',
				        'NH'=>'New Hampshire',
				        'NJ'=>'New Jersey',
				        'NM'=>'New Mexico',
				        'NY'=>'New York',
				        'NC'=>'North Carolina',
				        'ND'=>'North Dakota',
				        'OH'=>'Ohio',
				        'OK'=>'Oklahoma',
				        'OR'=>'Oregon',
				        'PA'=>'Pennsylvania',
				        'RI'=>'Rhode Island',
				        'SC'=>'South Carolina',
				        'SD'=>'South Dakota',
				        'TN'=>'Tennessee',
				        'TX'=>'Texas',
				        'UT'=>'Utah',
				        'VT'=>'Vermont',
				        'VA'=>'Virginia',
				        'WA'=>'Washington',
				        'WV'=>'West Virginia',
				        'WI'=>'Wisconsin',
				        'WY'=>'Wyoming'
                    );
                    
                    $select_state=$org['State'];
                    echo form_dropdown('state', $data_state, $select_state);
                    
                    echo"</td></tr>";

                    echo"<tr><td>";
					echo form_label('Country:');
					echo "</td><td colspan='2'>";
					$data_country = array(
						  'United States'=>'United States',
				          'Afghanistan'=>'Afghanistan', 
				          'Albania'=>'Albania', 
				          'Algeria'=>'Algeria', 
				          'American Samoa'=>'American Samoa', 
				          'Andorra'=>'Andorra', 
				          'Angola'=>'Angola', 
				          'Anguilla'=>'Anguilla', 
				          'Antarctica'=>'Antarctica', 
				          'Antigua and Barbuda'=>'Antigua and Barbuda', 
				          'Argentina'=>'Argentina', 
				          'Armenia'=>'Armenia', 
				          'Aruba'=>'Aruba', 
				          'Australia'=>'Australia', 
				          'Austria'=>'Austria', 
				          'Azerbaijan'=>'Azerbaijan', 
				          'Bahamas'=>'Bahamas', 
				          'Bahrain'=>'Bahrain', 
				          'Bangladesh'=>'Bangladesh', 
				          'Barbados'=>'Barbados', 
				          'Belarus'=>'Belarus', 
				          'Belgium'=>'Belgium', 
				          'Belize'=>'Belize', 
				          'Benin'=>'Benin', 
				          'Bermuda'=>'Bermuda', 
				          'Bhutan'=>'Bhutan', 
				          'Bolivia'=>'Bolivia', 
				          'Bosnia and Herzegovina'=>'Bosnia and Herzegovina', 
				          'Botswana'=>'Botswana', 
				          'Bouvet Island'=>'Bouvet Island', 
				          'Brazil'=>'Brazil', 
				          'British Indian Ocean Territory'=>'British Indian Ocean Territory', 
				          'Brunei Darussalam'=>'Brunei Darussalam', 
				          'Bulgaria'=>'Bulgaria', 
				          'Burkina Faso'=>'Burkina Faso', 
				          'Burundi'=>'Burundi', 
				          'Cambodia'=>'Cambodia', 
				          'Cameroon'=>'Cameroon', 
				          'Canada'=>'Canada', 
				          'Cape Verde'=>'Cape Verde', 
				          'Cayman Islands'=>'Cayman Islands', 
				          'Central African Republic'=>'Central African Republic', 
				          'Chad'=>'Chad', 
				          'Chile'=>'Chile', 
				          'China'=>'China', 
				          'Christmas Island'=>'Christmas Island', 
				          'Cocos (Keeling) Islands'=>'Cocos (Keeling) Islands', 
				          'Colombia'=>'Colombia', 
				          'Comoros'=>'Comoros', 
				          'Congo'=>'Congo', 
				          'Congo, The Democratic Republic of The'=>'Congo, The Democratic Republic of The', 
				          'Cook Islands'=>'Cook Islands', 
				          'Costa Rica'=>'Costa Rica', 
				          'Cote Divoire'=>'Cote Divoire', 
				          'Croatia'=>'Croatia', 
				          'Cuba'=>'Cuba', 
				          'Cyprus'=>'Cyprus', 
				          'Czech Republic'=>'Czech Republic', 
				          'Denmark'=>'Denmark', 
				          'Djibouti'=>'Djibouti', 
				          'Dominica'=>'Dominica', 
				          'Dominican Republic'=>'Dominican Republic', 
				          'Ecuador'=>'Ecuador', 
				          'Egypt'=>'Egypt', 
				          'El Salvador'=>'El Salvador', 
				          'Equatorial Guinea'=>'Equatorial Guinea', 
				          'Eritrea'=>'Eritrea', 
				          'Estonia'=>'Estonia', 
				          'Ethiopia'=>'Ethiopia', 
				          'Falkland Islands (Malvinas)'=>'Falkland Islands (Malvinas)', 
				          'Faroe Islands'=>'Faroe Islands', 
				          'Fiji'=>'Fiji', 
				          'Finland'=>'Finland', 
				          'France'=>'France', 
				          'French Guiana'=>'French Guiana', 
				          'French Polynesia'=>'French Polynesia', 
				          'French Southern Territories'=>'French Southern Territories', 
				          'Gabon'=>'Gabon', 
				          'Gambia'=>'Gambia', 
				          'Georgia'=>'Georgia', 
				          'Germany'=>'Germany', 
				          'Ghana'=>'Ghana', 
				          'Gibraltar'=>'Gibraltar', 
				          'Greece'=>'Greece', 
				          'Greenland'=>'Greenland', 
				          'Grenada'=>'Grenada', 
				          'Guadeloupe'=>'Guadeloupe', 
				          'Guam'=>'Guam', 
				          'Guatemala'=>'Guatemala', 
				          'Guinea'=>'Guinea', 
				          'Guinea-bissau'=>'Guinea-bissau', 
				          'Guyana'=>'Guyana', 
				          'Haiti'=>'Haiti', 
				          'Heard Island and Mcdonald Islands'=>'Heard Island and Mcdonald Islands', 
				          'Holy See (Vatican City State)'=>'Holy See (Vatican City State)', 
				          'Honduras'=>'Honduras', 
				          'Hong Kong'=>'Hong Kong', 
				          'Hungary'=>'Hungary', 
				          'Iceland'=>'Iceland', 
				          'India'=>'India', 
				          'Indonesia'=>'Indonesia', 
				          'Iran, Islamic Republic of'=>'Iran, Islamic Republic of', 
				          'Iraq'=>'Iraq', 
				          'Ireland'=>'Ireland', 
				          'Israel'=>'Israel', 
				          'Italy'=>'Italy', 
				          'Jamaica'=>'Jamaica', 
				          'Japan'=>'Japan', 
				          'Jordan'=>'Jordan', 
				          'Kazakhstan'=>'Kazakhstan', 
				          'Kenya'=>'Kenya', 
				          'Kiribati'=>'Kiribati', 
				          'Korea, Democratic Peoples Republic of'=>'Korea, Democratic Peoples Republic of', 
				          'Korea, Republic of'=>'Korea, Republic of', 
				          'Kuwait'=>'Kuwait', 
				          'Kyrgyzstan'=>'Kyrgyzstan', 
				          'Lao Peoples Democratic Republic'=>'Lao Peoples Democratic Republic', 
				          'Latvia'=>'Latvia', 
				          'Lebanon'=>'Lebanon', 
				          'Lesotho'=>'Lesotho', 
				          'Liberia'=>'Liberia', 
				          'Libyan Arab Jamahiriya'=>'Libyan Arab Jamahiriya', 
				          'Liechtenstein'=>'Liechtenstein', 
				          'Lithuania'=>'Lithuania', 
				          'Luxembourg'=>'Luxembourg', 
				          'Macao'=>'Macao', 
				          'Macedonia, The Former Yugoslav Republic of'=>'Macedonia, The Former Yugoslav Republic of', 
				          'Madagascar'=>'Madagascar', 
				          'Malawi'=>'Malawi', 
				          'Malaysia'=>'Malaysia', 
				          'Maldives'=>'Maldives', 
				          'Mali'=>'Mali', 
				          'Malta'=>'Malta', 
				          'Marshall Islands'=>'Marshall Islands', 
				          'Martinique'=>'Martinique', 
				          'Mauritania'=>'Mauritania', 
				          'Mauritius'=>'Mauritius', 
				          'Mayotte'=>'Mayotte', 
				          'Mexico'=>'Mexico', 
				          'Micronesia, Federated States of'=>'Micronesia, Federated States of', 
				          'Moldova, Republic of'=>'Moldova, Republic of', 
				          'Monaco'=>'Monaco', 
				          'Mongolia'=>'Mongolia', 
				          'Montserrat'=>'Montserrat', 
				          'Morocco'=>'Morocco', 
				          'Mozambique'=>'Mozambique', 
				          'Myanmar'=>'Myanmar', 
				          'Namibia'=>'Namibia', 
				          'Nauru'=>'Nauru', 
				          'Nepal'=>'Nepal', 
				          'Netherlands'=>'Netherlands', 
				          'Netherlands Antilles'=>'Netherlands Antilles', 
				          'New Caledonia'=>'New Caledonia', 
				          'New Zealand'=>'New Zealand', 
				          'Nicaragua'=>'Nicaragua', 
				          'Niger'=>'Niger', 
				          'Nigeria'=>'Nigeria', 
				          'Niue'=>'Niue', 
				          'Norfolk Island'=>'Norfolk Island', 
				          'Northern Mariana Islands'=>'Northern Mariana Islands', 
				          'Norway'=>'Norway', 
				          'Oman'=>'Oman', 
				          'Pakistan'=>'Pakistan', 
				          'Palau'=>'Palau', 
				          'Palestinian Territory, Occupied'=>'Palestinian Territory, Occupied', 
				          'Panama'=>'Panama', 
				          'Papua New Guinea'=>'Papua New Guinea', 
				          'Paraguay'=>'Paraguay', 
				          'Peru'=>'Peru', 
				          'Philippines'=>'Philippines', 
				          'Pitcairn'=>'Pitcairn', 
				          'Poland'=>'Poland', 
				          'Portugal'=>'Portugal', 
				          'Puerto Rico'=>'Puerto Rico', 
				          'Qatar'=>'Qatar', 
				          'Reunion'=>'Reunion', 
				          'Romania'=>'Romania', 
				          'Russian Federation'=>'Russian Federation', 
				          'Rwanda'=>'Rwanda', 
				          'Saint Helena'=>'Saint Helena', 
				          'Saint Kitts and Nevis'=>'Saint Kitts and Nevis', 
				          'Saint Lucia'=>'Saint Lucia', 
				          'Saint Pierre and Miquelon'=>'Saint Pierre and Miquelon', 
				          'Saint Vincent and The Grenadines'=>'Saint Vincent and The Grenadines', 
				          'Samoa'=>'Samoa', 
				          'San Marino'=>'San Marino', 
				          'Sao Tome and Principe'=>'Sao Tome and Principe', 
				          'Saudi Arabia'=>'Saudi Arabia', 
				          'Senegal'=>'Senegal', 
				          'Serbia and Montenegro'=>'Serbia and Montenegro', 
				          'Seychelles'=>'Seychelles', 
				          'Sierra Leone'=>'Sierra Leone', 
				          'Singapore'=>'Singapore', 
				          'Slovakia'=>'Slovakia', 
				          'Slovenia'=>'Slovenia', 
				          'Solomon Islands'=>'Solomon Islands', 
				          'Somalia'=>'Somalia', 
				          'South Africa'=>'South Africa', 
				          'South Georgia and The South Sandwich Islands'=>'South Georgia and The South Sandwich Islands', 
				          'Spain'=>'Spain', 
				          'Sri Lanka'=>'Sri Lanka', 
				          'Sudan'=>'Sudan', 
				          'Suriname'=>'Suriname', 
				          'Svalbard and Jan Mayen'=>'Svalbard and Jan Mayen', 
				          'Swaziland'=>'Swaziland', 
				          'Sweden'=>'Sweden', 
				          'Switzerland'=>'Switzerland', 
				          'Syrian Arab Republic'=>'Syrian Arab Republic', 
				          'Taiwan, Province of China'=>'Taiwan, Province of China', 
				          'Tajikistan'=>'Tajikistan', 
				          'Tanzania, United Republic of'=>'Tanzania, United Republic of', 
				          'Thailand'=>'Thailand', 
				          'Timor-leste'=>'Timor-leste', 
				          'Togo'=>'Togo', 
				          'Tokelau'=>'Tokelau', 
				          'Tonga'=>'Tonga', 
				          'Trinidad and Tobago'=>'Trinidad and Tobago', 
				          'Tunisia'=>'Tunisia', 
				          'Turkey'=>'Turkey', 
				          'Turkmenistan'=>'Turkmenistan', 
				          'Turks and Caicos Islands'=>'Turks and Caicos Islands', 
				          'Tuvalu'=>'Tuvalu', 
				          'Uganda'=>'Uganda', 
				          'Ukraine'=>'Ukraine', 
				          'United Arab Emirates'=>'United Arab Emirates', 
				          'United Kingdom'=>'United Kingdom', 
				          'United States'=>'United States', 
				          'United States Minor Outlying Islands'=>'United States Minor Outlying Islands',
				          'Uruguay'=>'Uruguay', 
				          'Uzbekistan'=>'Uzbekistan', 
				          'Vanuatu'=>'Vanuatu', 
				          'Venezuela'=>'Venezuela', 
				          'Viet Nam'=>'Viet Nam', 
				          'Virgin Islands, British'=>'Virgin Islands, British', 
				          'Virgin Islands, U.S.'=>'Virgin Islands, U.S.', 
				          'Wallis and Futuna'=>'Wallis and Futuna', 
				          'Western Sahara'=>'Western Sahara', 
				          'Yemen'=>'Yemen', 
				          'Zambia'=>'Zambia', 
				          'Zimbabwe'=>'Zimbabwe'
					);
					$select_country=$org['Country'];
                        
						
                        
					echo form_dropdown('country', $data_country,$select_country);
                    echo"</td></tr>";
                    echo"<tr ><td>";
					echo form_label('Zip:');
					echo "</td><td>";
                    $data_zip = array(
                        'name' => 'zip',
                        'id' => 'zip',
                        'type' => 'text',
                        'size'=>'16',
                        'class'=>'input-group',
                        'value'=>$org['zip']
                       
                    );

                    echo form_input($data_zip);
                    echo "</td><td>";
                    echo form_error('city');
                    echo"</td></tr>";
                    
                    echo"<tr><td colspan='2' align='center'>";
                    echo form_submit('submit', 'Submit', "class='submit'"); 
                    echo"</td></tr>";
                    echo form_hidden('createdby',$_SESSION['user_id']);
                    echo"</table>";
                    ?>
		</div>
	</div><!-- .row -->
</div><!-- .container -->