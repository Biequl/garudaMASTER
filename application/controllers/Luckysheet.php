<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\101\123\x45\120\x41\x54\x48") or exit("\116\157\x20\x64\151\162\145\x63\x74\x20\x73\143\162\151\x70\164\x20\141\x63\143\x65\x73\x73\40\x61\154\x6c\157\x77\145\x64"); class Luckysheet extends CI_Controller { public function __construct() { goto hh_Ht; DPeG2: redirect("\141\165\164\x68"); goto R8zzg; i43I6: show_error("\x48\141\156\171\x61\40\101\x64\x6d\151\x6e\x69\163\164\162\x61\x74\x6f\x72\x20\x79\x61\156\147\40\144\x69\142\x65\x72\151\40\x68\x61\153\40\x75\156\x74\165\x6b\x20\x6d\x65\x6e\x67\x61\x6b\163\145\163\40\150\x61\154\141\x6d\x61\156\x20\x69\156\x69\54\40\74\x61\40\x68\162\145\146\75\42" . base_url("\x64\x61\x73\x68\142\157\x61\x72\144") . "\42\x3e\x4b\x65\x6d\142\x61\154\151\40\153\x65\40\x6d\145\x6e\x75\40\x61\167\x61\x6c\74\x2f\x61\76", 403, "\101\x6b\163\x65\163\x20\x54\145\162\x6c\141\x72\141\156\x67"); goto v5cWe; uNsQX: $this->load->model("\x52\141\160\x6f\x72\x5f\155\157\144\145\154", "\162\x61\160\x6f\162"); goto YOOsN; US4nO: $this->load->model("\x4d\x61\x73\164\x65\x72\x5f\x6d\x6f\x64\145\x6c", "\155\141\x73\164\x65\x72"); goto yFuj7; v5cWe: dh6Fu: goto q6__J; R8zzg: c9U7G: goto fnSXL; ke934: $this->load->model("\104\x72\x6f\160\x64\157\x77\x6e\x5f\x6d\157\x64\x65\154", "\144\162\157\160\144\x6f\167\156"); goto US4nO; J5tvr: GDtgT: goto DPeG2; YOOsN: $this->load->model("\113\x65\x6c\x61\163\137\x6d\157\x64\x65\x6c", "\153\145\154\141\163"); goto ke934; lO18M: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\x75\x72\x75"))) { goto dh6Fu; } goto i43I6; fnSXL: $this->load->library(["\144\141\x74\141\x74\141\x62\154\x65\163", "\146\x6f\x72\155\x5f\x76\x61\x6c\x69\x64\141\x74\x69\157\x6e"]); goto Anfic; yFuj7: $this->form_validation->set_error_delimiters('', ''); goto GTCEU; hh_Ht: parent::__construct(); goto rzyGj; Anfic: $this->load->model("\104\141\x73\150\142\x6f\141\162\144\137\x6d\157\x64\145\x6c", "\x64\141\163\x68\142\x6f\x61\162\144"); goto uNsQX; rzyGj: if (!$this->ion_auth->logged_in()) { goto GDtgT; } goto lO18M; q6__J: goto c9U7G; goto J5tvr; GTCEU: } public function output_json($data, $encode = true) { goto bUeq5; nFyjd: $this->output->set_content_type("\141\x70\x70\154\151\143\141\x74\x69\157\156\x2f\x6a\x73\157\156")->set_output($data); goto G329_; bUeq5: if (!$encode) { goto LZLOz; } goto V_BW6; V_BW6: $data = json_encode($data); goto G4yRY; G4yRY: LZLOz: goto nFyjd; G329_: } public function index() { goto s73KL; s73KL: $user = $this->ion_auth->user()->row(); goto y0eSd; fsjfB: $smt = $this->dashboard->getSemesterActive(); goto m7RBs; FIh9d: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto viZ3v; viZ3v: $data["\x67\165\x72\165"] = $guru; goto tAF_X; E59W2: $tp = $this->dashboard->getTahunActive(); goto fsjfB; zQRZw: $data["\x74\x70\137\x61\x63\164\151\166\145"] = $tp; goto Owxmg; SQ0pB: $this->load->view("\x6d\x65\155\x62\145\162\163\x2f\x67\x75\162\165\x2f\x6c\165\143\x6b\x79\x76\x69\145\167"); goto F1H1A; F1H1A: $this->load->view("\155\145\x6d\142\145\162\x73\57\x67\165\162\x75\x2f\x74\145\x6d\x70\x6c\x61\x74\145\163\x2f\x66\x6f\157\x74\x65\x72"); goto yefmQ; Owxmg: $data["\x73\155\x74"] = $this->dashboard->getSemester(); goto sY43e; m7RBs: $data["\x74\x70"] = $this->dashboard->getTahun(); goto zQRZw; tAF_X: $this->load->view("\x6d\x65\155\142\x65\162\163\x2f\x67\x75\162\x75\x2f\164\x65\x6d\160\x6c\141\164\x65\163\x2f\150\x65\x61\144\x65\162", $data); goto SQ0pB; y0eSd: $data = ["\165\x73\x65\162" => $user, "\152\165\x64\165\x6c" => "\x55\163\145\162\40\115\x61\156\x61\x67\145\155\145\156\x74", "\163\165\x62\152\x75\x64\165\154" => "\104\141\164\141\x20\125\163\x65\x72\40\x53\151\163\x77\141", "\163\145\164\x74\x69\156\147" => $this->dashboard->getSetting()]; goto E59W2; sY43e: $data["\x73\x6d\x74\137\x61\x63\x74\151\x76\145"] = $smt; goto FIh9d; yefmQ: } }
