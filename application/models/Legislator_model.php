<?php

/**
 * Created by PhpStorm.
 * User: tommarler
 * Date: 12/2/16
 * Time: 5:28 PM
 */
class Legislator_model extends CI_Model
{

    public function create_legislator($data)
    {
//         Empty array
//         Loop through each legislator Item and store in the legislator array
        $legislator[] = array();
        foreach($data['legs'] as $leg)
        {

             $legislator = array(
                 'first_name' => $leg['first_name'],
                 'last_name' => $leg['last_name'],
                 'leg_id' => $leg['leg_id']

             );
            // TODO: Dont allow dup in database

            $query = $this->db->get_where('Legislator', $legislator);
            if($query->num_rows() > 0)
            {
                return true;
            }
            else
            {
                $this->db->insert('Legislator', $legislator);
            }


        }
        return true;

        //print_r($legislator);
//        echo "This is the firstanme";
//        print_r($legislator);
//         Insert into db
//        $result = $this->db->get('Legislator');
//        if($result)
//        {
//            echo "Database entry";
//            $insert_data = $this->db-insert('Legislator', $legislator);
//            var_dump($insert_data);
//            return true;
//        }





//        if(empty($storeLegislator))
//        {
//
//            echo "Your storeLegislatore is Empty";
//        }
//        else
//        {
//            foreach($storeLegislator as $l)
//            {
//                echo $l['f'];
//            }
//            echo "Your storeLegislator Array is not Empty";
//            print_r($storeLegislator);
//        }

        //print_r($data);

    }
}