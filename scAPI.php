<?php
    require_once __DIR__ . '/constants.php';
    class scAPI{
        private $apiKey = SC_API_KEY;
        
        private $leadUrl = SC_PROSPECT_ENDPOINT;
        private $clickUrl = SC_CLICK_ENDPOINT;
        private $checkoutUrl = SC_CHECKOUT_ENDPOINT;
        private $upsellUrl = SC_UPSELL_ENDPOINT;
        private $successUrl = SC_SUCCESS_ENDPOINT;

        public function createLead($payload)
        {
            //echo ($this->apiKey);


            // Convert payload to JSON
            $jsonPayload = json_encode($payload);

            // Set cURL options
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $this->leadUrl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
                'Authorization:' . $this->apiKey
            ]);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonPayload);

            $response = curl_exec($ch);

            if (curl_errno($ch)) {
                $error_msg = curl_error($ch);
            }

            curl_close($ch);

            if (isset($error_msg)) {
                throw new Exception("cURL error: $error_msg");
            }

            return json_decode($response, true);
        }

        public function createClick($payload)
        {
            //echo ($this->apiKey);


            // Convert payload to JSON
            $jsonPayload = json_encode($payload);

            // Set cURL options
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $this->clickUrl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
                'Authorization:' . $this->apiKey
            ]);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonPayload);

            $response = curl_exec($ch);

            if (curl_errno($ch)) {
                $error_msg = curl_error($ch);
            }

            curl_close($ch);

            if (isset($error_msg)) {
                throw new Exception("cURL error: $error_msg");
            }

            return json_decode($response, true);
        }

        public function createOrder($payload)
        {
            //echo ($this->apiKey);


            // Convert payload to JSON
            $jsonPayload = json_encode($payload);

            // Set cURL options
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $this->checkoutUrl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
                'Authorization:' . $this->apiKey
            ]);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonPayload);

            $response = curl_exec($ch);

            if (curl_errno($ch)) {
                $error_msg = curl_error($ch);
            }

            curl_close($ch);

            if (isset($error_msg)) {
                throw new Exception("cURL error: $error_msg");
            }

            return json_decode($response,true);
            //var_dump($data);
            
        }
        
        public function createUpsell($payload)
        {
            //echo ($this->apiKey);


            // Convert payload to JSON
            $jsonPayload = json_encode($payload);

            // Set cURL options
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $this->upsellUrl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
                'Authorization:' . $this->apiKey
            ]);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonPayload);

            $response = curl_exec($ch);

            if (curl_errno($ch)) {
                $error_msg = curl_error($ch);
            }

            curl_close($ch);

            if (isset($error_msg)) {
                throw new Exception("cURL error: $error_msg");
            }

            return json_decode($response, true);
        }

        public function successOrder($payload)
        {
            //echo ($this->apiKey);


            // Convert payload to JSON
            $jsonPayload = json_encode($payload);

            // Set cURL options
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $this->successUrl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
                'Authorization:' . $this->apiKey
            ]);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonPayload);

            $response = curl_exec($ch);

            if (curl_errno($ch)) {
                $error_msg = curl_error($ch);
            }

            curl_close($ch);

            if (isset($error_msg)) {
                throw new Exception("cURL error: $error_msg");
            }

            return json_decode($response, true);
        }
    }