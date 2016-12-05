<?php

/**
 * Created by PhpStorm.
 * User: tommarler
 * Date: 12/2/16
 * Time: 5:39 PM
 */
require_once 'vendor/autoload.php';

class Legislator extends CI_Controller
{
    public function index()
    {

        // Load the main view for the legislator
        $data['main_view'] = 'legislator/legislator_home';
        $this->load->view('layout/main', $data);

    }

    public function search()
    {
        // Get the post data from the form being submitted
        $legislatorState = $this->input->post('userstate');

        // TODO: Needt to fix this because i have to include the config_open_state.php from the examples for it to work

        $apiKey = "4a8beb6a33b845edb52173f9f5764b62";
        $adapter    = new FurryBear\Http\Adapter\Curl();
        $provider   = new FurryBear\Provider\Source\SunlightOpenStates($adapter, $apiKey);
        $output     = new FurryBear\Output\Strategy\JsonToArray();

        $fb = new FurryBear\FurryBear();
        $fb->registerProvider($provider)->registerOutput($output);

        // Params for get request to legislators
        $params = array('state' => $legislatorState, 'active' => 'true');

        // Returned values
        $legislator = $fb->legislators->get($params);

        // Store Returned values
        $data['legs'] = $legislator;

        // Check if array is empty
        if(empty($data))
        {
            // TODO: Should redirect to somewhere useful
            echo '$data is empty';
        }
        else
        {
            // Array has values and send to create_legislator()
            // Show the requested states legislator on a view
            $this->load->model('Legislator_model');
            if($this->Legislator_model->create_legislator($data))
            {
                $this->load->view("legislator/legislator_display", $data);
            }

        }

        //$this->load->view("members/member_display", $data);

    }

    public function detail($leg_id)
    {
        $apiKey = "4a8beb6a33b845edb52173f9f5764b62";
        $adapter = new FurryBear\Http\Adapter\Curl();
        $provider = new FurryBear\Provider\Source\SunlightOpenStates($adapter, $apiKey);
        $output = new FurryBear\Output\Strategy\JsonToArray();

        $fb = new FurryBear\FurryBear();
        $fb->registerProvider($provider)->registerOutput($output);

        $legislator = $fb->legislator_detail->id($leg_id)->get();
        $data['legs'] = $legislator;

        $this->load->view('legislator/legislator_detail', $data);

        //$this->load->view("members/member_Legislator_details", $data);
//        echo "This is from the legislator Detail Page: ";
//        foreach ($legislator['roles'] as $leg) {
//            if (isset($leg['term']) && isset($leg['committee']) && isset($leg['committee_id']) && isset($leg['position'])) {
//                echo "<br />";
//                echo "Term: ";
//                echo $leg['term'];
//                echo "<br />";
//                echo "Committee: ";
//                echo $leg['committee'];
//                echo "<br />";
//                echo "Committee_ID: ";
//                echo $leg['committee_id'];
//                echo "<br />";
//                echo "Position: ";
//                echo $leg['position'];
//                echo "<br />";
//                echo "<br />";
//
//            } else {
//                echo "<br />";
//
//            }
//
//        }
    }


}