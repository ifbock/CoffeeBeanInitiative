<?php
/**
 * Class SampleTest
 *
 * @package 
 */

/**
 * Sample test case.
 */
class SampleTest extends WP_UnitTestCase {
	public $apikey  = 'a885bcc7f6edcd28f0060ac9b336312d-us3';
	public $list_id = '';

	function test_missing_apikey() {
		$apikey = 'asdf';
		$api = new MailChimp_API($apikey);
		$key = mailchimpSF_verify_key($api);

		$this->assertTrue(is_wp_error($key));
	}

	function test_correct_apikey() {
		$apikey = $this->apikey; // REMOVE ME.
		try {
			$api   = new MailChimp_API($apikey);
			$value = true;
		} catch (Exception $e) {
			$value = false;
		}

		$this->assertTrue($value);
	}

	function test_missing_required_merge_vars() {
		$fname = array(
			'tag' => 'FNAME',
			'name' => 'First Name',
			'type' => 'text',
			'required' => 'Y'
			);

		$merge_vars[] = $fname;

		$submit = mailchimpSF_merge_submit($merge_vars);

		// Merge value defaults to empty string, which should error
		$this->assertTrue(is_wp_error($submit));
		$this->assertTrue(is_object($submit));
	}

	function test_required_merge_var() {
		$name = 'mc_mv_FNAME';
		$fname = array(
			'tag' => 'FNAME',
			'name' => 'First Name',
			'type' => 'text',
			'required' => 'Y'
			);
		$merge_vars[] = $fname;
		$_POST[$name] = 'Hello World';

		$submit = mailchimpSF_merge_submit($merge_vars);

		$this->assertFalse(is_wp_error($submit));
		$this->assertTrue(is_object($submit));
	}

	function test_invalid_phone_number() {
		$var['name'] = 'Phone';
		$value = array('asd','555','1234');
		$phone = mailchimpSF_merge_validate_phone($value, $var);

		$this->assertTrue(is_wp_error($phone));
		$this->assertTrue(is_object($phone));
	}

	function test_valid_phone_number() {
		$var['name'] = 'Phone';
		$value = array('123','456','7890');
		$phone = mailchimpSF_merge_validate_phone($value, $var);

		$this->assertFalse(is_wp_error($phone));
		$this->assertTrue(is_string($phone));
	}

	function test_invalid_address() {
		$var    = array(
			'tag' => 'ADDRESS',
			'name' => 'Address',
			'type' => 'Address',
			'required' => 'Y'
			);
		$value  = array(
			'addr1' => '123 Magic Street'
			);
		$submit = mailchimpSF_merge_validate_address($value, $var);

		$this->assertTrue(is_wp_error($submit));
		$this->assertTrue(is_object($submit));
	}

	function test_remove_empty_merge_feilds() {
		$merge        = new StdClass();
		$merge->fname = 'test';
		$merge->test  = ' ';
		$merge->hello = null;

		$submit = mailchimpSF_merge_remove_empty($merge);

		$this->assertTrue($merge->fname === $submit->fname);
		$this->assertTrue(empty($submit->test));
		$this->assertTrue(empty($submit->hello));
	}

	function test_delete_everything() {
		$fname = array(
			'tag' => 'FNAME',
			'name' => 'First Name',
			'type' => 'text',
			'required' => 'Y'
			);

		$ig = array(
			'id' => '123'
			);

		$igs[] = $ig;

		update_option('mc_list_id', '123');
    	update_option('mc_list_name', 'asdf');
    	update_option('mc_interest_groups', $igs);
    	update_option('mc_merge_vars', array($fname));
    	update_option('mc_show_interest_groups_123', 'on');
    	update_option('mc_mv_FNAME', $fname);

    	$this->assertTrue(is_string(get_option('mc_list_id')));
    	$this->assertTrue(is_string(get_option('mc_list_name')));
    	$this->assertTrue(is_string(get_option('mc_show_interest_groups_123')));
    	$this->assertTrue(is_array(get_option('mc_mv_FNAME')));

    	mailchimpSF_delete_setup();

    	$this->assertFalse(get_option('mc_list_id'));
		$this->assertFalse(get_option('mc_list_name'));
    	$this->assertFalse(get_option('mc_show_interest_groups_123'));
    	$this->assertFalse(get_option('mc_mv_FNAME'));    	
	}

	function test_add_email_field() {
		$merge = array(
			array(
				'tag' => 'TEST',
				'name' => 'test',
				'type' => 'text',
				'required' => false,
				'public' => true,
				'display_order' => 2,
				'default_value' => null
				)
			);
		$merge = mailchimpSF_add_email_field($merge);

		$this->assertTrue($merge[0]['tag'] == 'EMAIL');
	}

}