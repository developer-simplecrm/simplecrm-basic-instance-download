<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2015-08-28 04:55:17
$dictionary['Lead']['fields']['type_c']['inline_edit']='1';
$dictionary['Lead']['fields']['type_c']['labelValue']='Type';

 

 // created: 2016-04-19 12:47:42
$dictionary['Lead']['fields']['twitter_handle_c']['inline_edit']='1';
$dictionary['Lead']['fields']['twitter_handle_c']['labelValue']='twitter handle';

 

 // created: 2016-06-15 10:52:25
$dictionary['Lead']['fields']['simplecrm_status_c']['inline_edit']='';
$dictionary['Lead']['fields']['simplecrm_status_c']['labelValue']='Approval Status';

 

 // created: 2016-04-15 11:25:55
$dictionary['Lead']['fields']['post_from_id_c']['inline_edit']='';
$dictionary['Lead']['fields']['post_from_id_c']['labelValue']='post from id';

 

 // created: 2016-05-03 15:51:19
$dictionary['Lead']['fields']['state_c']['inline_edit']='1';
$dictionary['Lead']['fields']['state_c']['labelValue']='State';

 

// created: 2016-06-08 10:51:18
$dictionary["Lead"]["fields"]["scrm_partner_contacts_leads"] = array (
  'name' => 'scrm_partner_contacts_leads',
  'type' => 'link',
  'relationship' => 'scrm_partner_contacts_leads',
  'source' => 'non-db',
  'module' => 'scrm_Partner_Contacts',
  'bean_name' => false,
  'vname' => 'LBL_SCRM_PARTNER_CONTACTS_LEADS_FROM_SCRM_PARTNER_CONTACTS_TITLE',
  'id_name' => 'scrm_partner_contacts_leadsscrm_partner_contacts_ida',
);
$dictionary["Lead"]["fields"]["scrm_partner_contacts_leads_name"] = array (
  'name' => 'scrm_partner_contacts_leads_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SCRM_PARTNER_CONTACTS_LEADS_FROM_SCRM_PARTNER_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'scrm_partner_contacts_leadsscrm_partner_contacts_ida',
  'link' => 'scrm_partner_contacts_leads',
  'table' => 'scrm_partner_contacts',
  'module' => 'scrm_Partner_Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Lead"]["fields"]["scrm_partner_contacts_leadsscrm_partner_contacts_ida"] = array (
  'name' => 'scrm_partner_contacts_leadsscrm_partner_contacts_ida',
  'type' => 'link',
  'relationship' => 'scrm_partner_contacts_leads',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SCRM_PARTNER_CONTACTS_LEADS_FROM_LEADS_TITLE',
);


 // created: 2015-08-20 11:47:30
$dictionary['Lead']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

// created: 2016-06-08 11:12:12
$dictionary["Lead"]["fields"]["scrm_partners_leads_1"] = array (
  'name' => 'scrm_partners_leads_1',
  'type' => 'link',
  'relationship' => 'scrm_partners_leads_1',
  'source' => 'non-db',
  'module' => 'scrm_Partners',
  'bean_name' => 'scrm_Partners',
  'vname' => 'LBL_SCRM_PARTNERS_LEADS_1_FROM_SCRM_PARTNERS_TITLE',
  'id_name' => 'scrm_partners_leads_1scrm_partners_ida',
);
$dictionary["Lead"]["fields"]["scrm_partners_leads_1_name"] = array (
  'name' => 'scrm_partners_leads_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SCRM_PARTNERS_LEADS_1_FROM_SCRM_PARTNERS_TITLE',
  'save' => true,
  'id_name' => 'scrm_partners_leads_1scrm_partners_ida',
  'link' => 'scrm_partners_leads_1',
  'table' => 'scrm_partners',
  'module' => 'scrm_Partners',
  'rname' => 'name',
);
$dictionary["Lead"]["fields"]["scrm_partners_leads_1scrm_partners_ida"] = array (
  'name' => 'scrm_partners_leads_1scrm_partners_ida',
  'type' => 'link',
  'relationship' => 'scrm_partners_leads_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SCRM_PARTNERS_LEADS_1_FROM_LEADS_TITLE',
);


 // created: 2016-07-11 12:58:47
$dictionary['Lead']['fields']['category_c']['inline_edit']='1';
$dictionary['Lead']['fields']['category_c']['labelValue']='Category';

 

 // created: 2015-08-20 11:47:30
$dictionary['Lead']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2016-04-15 11:25:03
$dictionary['Lead']['fields']['posted_message_id_c']['inline_edit']='';
$dictionary['Lead']['fields']['posted_message_id_c']['labelValue']='posted message id';

 

 // created: 2016-06-08 11:36:38
$dictionary['Lead']['fields']['partner_status_c']['inline_edit']='';
$dictionary['Lead']['fields']['partner_status_c']['labelValue']='Partner Approval Status';

 

 // created: 2016-05-03 15:50:11
$dictionary['Lead']['fields']['country_c']['inline_edit']='1';
$dictionary['Lead']['fields']['country_c']['labelValue']='Country';

 

 // created: 2016-05-03 15:48:34
$dictionary['Lead']['fields']['india_c']['inline_edit']='1';
$dictionary['Lead']['fields']['india_c']['labelValue']='India';

 

 // created: 2015-08-20 11:47:30
$dictionary['Lead']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

 // created: 2016-07-07 13:19:37
$dictionary['Lead']['fields']['loan_type_c']['inline_edit']='1';
$dictionary['Lead']['fields']['loan_type_c']['labelValue']='Loan Type';

 

 // created: 2016-04-19 12:48:24
$dictionary['Lead']['fields']['tweet_id_c']['inline_edit']='1';
$dictionary['Lead']['fields']['tweet_id_c']['labelValue']='tweet id';

 

 // created: 2016-06-08 14:17:53
$dictionary['Lead']['fields']['status']['inline_edit']=true;
$dictionary['Lead']['fields']['status']['options']='lead_status_dom';
$dictionary['Lead']['fields']['status']['comments']='Status of the lead';
$dictionary['Lead']['fields']['status']['merge_filter']='disabled';

 

 // created: 2016-06-07 20:08:43
$dictionary['Lead']['fields']['website']['inline_edit']=true;
$dictionary['Lead']['fields']['website']['comments']='URL of website for the company';
$dictionary['Lead']['fields']['website']['merge_filter']='disabled';

 

 // created: 2016-05-03 15:54:50
$dictionary['Lead']['fields']['city_c']['inline_edit']='1';
$dictionary['Lead']['fields']['city_c']['labelValue']='City';

 

 // created: 2015-08-20 11:47:30
$dictionary['Lead']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 
?>