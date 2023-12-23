<?php
// Dummy plain object
class NMM_Cryptocurrency {

    private $id;
    private $name;
    private $roundPrecision;
    private $logoFilePath;
    private $updateInterval;
    private $symbol;
    private $hasHd;
    private $autopay;
    private $needsConfirmations;
    private $contract_address;
    private $token_type;
    // erc20, bep20 , trc20
    public function __construct($id, $name, $roundPrecision, $logoFilePath, $updateInterval, $symbol, $hasHd, $autopay, $needsConfirmations, $contract_address,$token_type='erc20') {
        $this->id = $id;
        $this->name = $name;
        $this->roundPrecision = $roundPrecision;
        $this->logoFilePath = $logoFilePath;
        $this->updateInterval = $updateInterval;
        $this->symbol = $symbol;
        $this->hasHd = $hasHd;
        $this->autopay = $autopay;
        $this->needsConfirmations = $needsConfirmations;
        $this->contract_address =$contract_address;
        $this->token_type =$token_type;
    }

    public function get_id() {
        return $this->id;
    }

    public function get_name() {
        return $this->name;
    }

    public function get_round_precision() {
        return $this->roundPrecision;
    }

    public function get_logo_file_path() {
        return NMM_PLUGIN_DIR . '/assets/img/' . $this->logoFilePath;
    }

    public function get_update_interval() {
        return $this->updateInterval;
    }

    public function get_symbol() {        
        return $this->symbol;
    }
    public function has_hd() {
        return $this->hasHd;
    }

    public function has_autopay() {
        return $this->autopay;
    }

    public function needs_confirmations() {
        return $this->needsConfirmations;
    }

    public function is_token() {
        return strlen($this->contract_address) > 0;
    }

    public function get_contract() {
        return $this->contract_address;
    }
    public function get_token_type() {
        return $this->token_type;
    }
}

?>
