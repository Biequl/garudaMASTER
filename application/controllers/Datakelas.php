<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\x41\x53\x45\120\101\124\x48") or exit("\116\157\40\144\x69\162\x65\x63\x74\40\x73\x63\x72\x69\160\164\x20\141\143\143\145\x73\x73\x20\141\154\x6c\x6f\167\145\x64"); class Datakelas extends CI_Controller { public function __construct() { goto JDahP; zZyWa: $this->load->model("\x4b\145\x6c\141\x73\x5f\155\x6f\144\145\x6c", "\x6b\145\154\x61\x73"); goto v51gW; s8RzW: $this->form_validation->set_error_delimiters('', ''); goto i429g; uHuSB: $this->load->library(["\x64\141\164\141\x74\141\x62\x6c\145\163", "\146\157\162\x6d\x5f\166\141\x6c\151\x64\141\x74\151\x6f\x6e"]); goto zZyWa; OwQxL: if ($this->ion_auth->is_admin()) { goto HthNc; } goto FshgO; kw0g6: if (!$this->ion_auth->logged_in()) { goto OIx9m; } goto OwQxL; iR6pg: $this->load->model("\122\x61\160\157\x72\x5f\x6d\157\x64\145\154", "\x72\141\160\157\162"); goto s8RzW; FshgO: show_error("\x48\141\x6e\x79\x61\x20\x41\144\155\151\156\x69\x73\164\x72\141\164\157\162\40\171\x61\x6e\x67\x20\144\x69\x62\145\162\x69\x20\x68\141\153\x20\165\156\164\165\153\x20\155\145\x6e\x67\141\153\163\145\163\40\150\141\154\141\x6d\141\156\x20\151\156\151\54\x20\x3c\x61\40\x68\162\x65\146\75\42" . base_url("\x64\141\x73\150\x62\157\x61\x72\144") . "\42\x3e\x4b\145\x6d\142\x61\154\151\x20\x6b\145\40\155\x65\x6e\165\40\141\167\x61\154\74\57\x61\x3e", 403, "\x41\x6b\163\x65\163\40\x54\x65\x72\154\141\x72\x61\156\x67"); goto y7hIZ; y7hIZ: HthNc: goto MVgu_; u6qTA: OIx9m: goto yGIVz; iVE7q: dIHzo: goto uHuSB; v51gW: $this->load->model("\104\141\163\x68\142\x6f\141\162\144\137\x6d\x6f\144\145\x6c", "\144\141\x73\x68\x62\157\x61\x72\144"); goto z5NZk; JDahP: parent::__construct(); goto kw0g6; qmAol: $this->load->model("\x44\162\x6f\x70\144\157\x77\156\137\155\157\144\145\x6c", "\144\x72\157\160\x64\x6f\167\156"); goto iR6pg; z5NZk: $this->load->model("\115\x61\x73\164\145\162\x5f\x6d\x6f\x64\145\154", "\155\x61\x73\164\x65\x72"); goto qmAol; MVgu_: goto dIHzo; goto u6qTA; yGIVz: redirect("\141\x75\x74\150"); goto iVE7q; i429g: } public function output_json($data, $encode = true) { goto dMvO1; y0OMU: $this->output->set_content_type("\x61\160\160\x6c\151\143\141\164\x69\157\x6e\x2f\x6a\x73\157\156")->set_output($data); goto bHOQO; vbn8X: uMYnp: goto y0OMU; P8V1D: $data = json_encode($data); goto vbn8X; dMvO1: if (!$encode) { goto uMYnp; } goto P8V1D; bHOQO: } public function index() { goto NN07D; mtnAS: $kelas_lama = $this->kelas->getKelasList($tp->id_tp - 1, "\62"); goto mhktA; uKslL: $data["\154\145\x76\x65\x6c"] = $this->kelas->getLevel($setting->jenjang); goto aR_pd; ayYWy: $data = ["\165\163\x65\162" => $user, "\152\x75\x64\165\154" => "\113\x65\x6c\141\x73", "\x73\x75\x62\x6a\165\144\165\x6c" => "\x44\x61\x74\141\40\113\145\x6c\x61\163", "\163\145\164\x74\x69\156\147" => $setting]; goto bXV_J; XqMyn: $data["\160\162\x6f\x66\x69\x6c\145"] = $this->dashboard->getProfileAdmin($user->id); goto L9Cvi; AG5wp: $data["\163\x69\163\167\141"] = $this->kelas->getAllSiswa($tp->id_tp, $smt->id_smt); goto UqjXd; XKGJX: $smt = $this->dashboard->getSemesterActive(); goto Jgh8R; Mv3Jm: $data["\x6b\x65\154\x61\163"] = $kelas; goto fjUAN; L9Cvi: $chek = $this->kelas->count_all(); goto QDdGJ; D4pOs: if (!($chek > 0)) { goto qVgdE; } goto odPbO; UqjXd: $this->load->view("\137\x74\x65\155\x70\154\141\164\145\163\57\x64\x61\x73\x68\142\x6f\x61\x72\x64\57\x5f\x68\145\x61\144\x65\x72", $data); goto g5iKx; odPbO: $kelas = $this->kelas->getKelasList($tp->id_tp, $smt->id_smt); goto mtnAS; Ojb_8: $data["\x74\x70\137\x61\x63\x74\x69\x76\x65"] = $tp; goto C73hP; Jgh8R: $data["\164\160"] = $this->dashboard->getTahun(); goto Ojb_8; QDdGJ: $kelas = []; goto LPL8D; NN07D: $user = $this->ion_auth->user()->row(); goto Yi_XR; To0LK: $data["\163\155\x74\137\x61\143\x74\x69\166\x65"] = $smt; goto XqMyn; fjUAN: $data["\x6b\x65\154\141\x73\137\x6c\141\155\141"] = $kelas_lama; goto C8iwb; LPL8D: $kelas_lama = []; goto D4pOs; C8iwb: $data["\152\165\162\x75\x73\141\x6e"] = $this->kelas->get_jurusan(); goto uKslL; aR_pd: $data["\x67\165\x72\x75"] = $this->kelas->get_guru(); goto AG5wp; mhktA: qVgdE: goto Mv3Jm; g5iKx: $this->load->view("\155\141\x73\164\x65\162\57\x6b\145\x6c\141\163\57\x64\141\164\x61"); goto coH00; bXV_J: $tp = $this->dashboard->getTahunActive(); goto XKGJX; coH00: $this->load->view("\x5f\164\x65\155\x70\x6c\141\x74\145\163\57\144\x61\163\x68\x62\157\141\162\144\57\137\x66\x6f\x6f\x74\145\162"); goto I_Tdz; Yi_XR: $setting = $this->dashboard->getSetting(); goto ayYWy; C73hP: $data["\163\x6d\164"] = $this->dashboard->getSemester(); goto To0LK; I_Tdz: } public function detail($id) { goto OGYmh; MvXPt: if ($struktur == null) { goto sqT4H; } goto PC3R_; LWMGx: HAEwV: goto G8PHG; ainhZ: $this->load->view("\x5f\164\145\155\x70\154\141\164\x65\163\x2f\x64\x61\x73\150\142\x6f\x61\x72\x64\x2f\137\146\x6f\x6f\164\x65\x72"); goto LNXbx; YV9K0: $data = ["\x75\163\x65\162" => $user, "\x6a\165\x64\165\154" => "\x44\145\x74\x61\x69\154\x20\113\x65\x6c\x61\x73", "\x73\x75\x62\x6a\165\144\x75\x6c" => "\x44\145\x74\141\x69\154\40\113\x65\x6c\x61\163", "\x73\x65\164\164\x69\x6e\x67" => $setting]; goto zUs2l; A4IoD: $data["\164\160"] = $this->dashboard->getTahun(); goto qTd44; Djryf: $data["\x6c\x65\x76\x65\154"] = $this->kelas->getLevel($setting->jenjang); goto PvX2n; wMJS_: $data["\163\164\x72\x75\x6b\x74\165\x72"] = json_decode(json_encode($this->kelas->dummyStruktur())); goto LWMGx; Pt73s: $data["\153\x65\x6c\141\x73"] = $this->kelas->get_one($id); goto Q0PwL; Jjkny: $struktur = $this->kelas->getStrukturKelas($id); goto MvXPt; PC3R_: $data["\x73\164\162\165\153\x74\x75\162"] = $struktur; goto bq3Wj; be48q: $setting = $this->dashboard->getSetting(); goto YV9K0; hgDpZ: $data["\163\151\x73\167\141\x73"] = $this->kelas->get_siswa_kelas($id, $tp->id_tp, $smt->id_smt); goto Jjkny; M0gmU: $smt = $this->dashboard->getSemesterActive(); goto A4IoD; bq3Wj: goto HAEwV; goto VexsL; DxgW9: $this->load->view("\155\141\163\164\145\x72\x2f\153\145\154\141\x73\x2f\144\145\x74\x61\x69\x6c"); goto ainhZ; EBaVS: $data["\x73\x6d\164"] = $this->dashboard->getSemester(); goto TEl17; zUs2l: $tp = $this->dashboard->getTahunActive(); goto M0gmU; w4uXh: $data["\160\x72\157\x66\x69\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto Pt73s; VexsL: sqT4H: goto wMJS_; Q0PwL: $data["\152\x75\162\165\x73\x61\x6e"] = $this->kelas->get_jurusan(); goto Djryf; OGYmh: $user = $this->ion_auth->user()->row(); goto be48q; TEl17: $data["\x73\155\x74\x5f\141\x63\x74\151\x76\x65"] = $smt; goto w4uXh; PvX2n: $data["\147\x75\162\x75"] = $this->kelas->get_guru(); goto hgDpZ; G8PHG: $this->load->view("\x5f\x74\x65\x6d\160\x6c\141\164\145\x73\57\x64\x61\x73\150\142\157\x61\162\x64\57\x5f\x68\145\x61\144\145\x72", $data); goto DxgW9; qTd44: $data["\164\x70\x5f\x61\143\x74\151\x76\145"] = $tp; goto EBaVS; LNXbx: } public function add() { goto b_dao; bPrWB: $data["\163\x6d\x74"] = $this->dashboard->getSemester(); goto Gxd6k; uHBHQ: $this->load->view("\x6d\x61\163\164\145\162\57\153\x65\154\x61\x73\57\x61\x64\x64"); goto Xbnc7; b_dao: $user = $this->ion_auth->user()->row(); goto L6KJp; hHfRi: $tp = $this->dashboard->getTahunActive(); goto iCZsy; Xbnc7: $this->load->view("\x5f\x74\145\x6d\x70\x6c\141\164\145\x73\x2f\144\x61\x73\150\142\157\141\x72\x64\x2f\137\x66\x6f\157\164\x65\162"); goto axFzW; nXz7S: $data["\x67\165\162\165"] = $this->kelas->get_guru(); goto OAr61; WFTDQ: $this->load->view("\137\164\x65\x6d\x70\x6c\141\x74\145\163\57\144\141\x73\150\142\x6f\x61\162\x64\x2f\137\150\x65\141\x64\145\162", $data); goto uHBHQ; Gxd6k: $data["\x73\x6d\x74\137\x61\x63\164\x69\x76\x65"] = $smt; goto G8_34; HvRqW: $data["\152\x75\162\x75\x73\141\x6e"] = $this->kelas->get_jurusan(); goto mWPhD; iCZsy: $smt = $this->dashboard->getSemesterActive(); goto sXpXD; ch_TX: $data["\163\x69\163\167\x61"] = $siswa; goto wmUWB; G8_34: $data["\x70\162\157\146\x69\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto n5tc3; L6KJp: $setting = $this->dashboard->getSetting(); goto uzJ0d; mWPhD: $data["\154\x65\x76\145\154"] = $this->kelas->getLevel($setting->jenjang); goto nXz7S; OAr61: $siswa = $this->kelas->getAllSiswa($tp->id_tp, $smt->id_smt); goto ch_TX; n5tc3: $data["\x6b\145\154\x61\x73"] = json_decode(json_encode($this->kelas->dummy())); goto HvRqW; uzJ0d: $data = ["\x75\163\145\162" => $user, "\x6a\165\x64\165\154" => "\x4b\x65\x6c\141\x73", "\x73\165\142\x6a\x75\x64\165\x6c" => "\124\x61\155\142\141\150\40\113\145\154\141\x73", "\163\145\x74\x74\x69\156\x67" => $setting]; goto hHfRi; qLHlX: $data["\164\160\137\141\x63\x74\x69\x76\145"] = $tp; goto bPrWB; wmUWB: $data["\163\151\x73\x77\x61\153\x65\154\141\x73"] = array(); goto WFTDQ; sXpXD: $data["\x74\160"] = $this->dashboard->getTahun(); goto qLHlX; axFzW: } public function edit($id = '') { goto fG42x; nOZ9g: $data = ["\165\163\x65\162" => $user, "\x6a\x75\144\x75\154" => "\x4b\x65\154\x61\x73", "\x73\165\142\152\x75\144\165\154" => "\105\x64\x69\164\x20\x4b\x65\154\x61\x73", "\x73\x65\164\164\151\x6e\147" => $setting]; goto Kf3L7; BQiK1: $data["\x74\160"] = $this->dashboard->getTahun(); goto iOc8P; fG42x: $user = $this->ion_auth->user()->row(); goto UUUiM; Qpd7Y: $data["\163\x69\163\167\x61"] = $this->kelas->getAllSiswa($tp->id_tp, $smt->id_smt); goto mXNlX; BZcSR: $this->load->view("\155\x61\163\164\x65\162\57\153\x65\x6c\141\x73\x2f\141\144\x64"); goto ZPu1k; sGiCu: $data["\x70\x72\157\146\x69\154\145"] = $this->dashboard->getProfileAdmin($user->id); goto J1hvI; UUUiM: $setting = $this->dashboard->getSetting(); goto nOZ9g; mXNlX: $data["\163\x69\x73\x77\x61\x6b\x65\x6c\141\163"] = $this->kelas->get_siswa_kelas($id, $tp->id_tp, $smt->id_smt); goto wUHke; GLXRv: $data["\x6a\165\162\165\x73\x61\156"] = $this->kelas->get_jurusan(); goto CKkYB; xWb9v: $data["\163\155\x74\137\x61\143\x74\151\x76\x65"] = $smt; goto sGiCu; J1hvI: $data["\151\144\137\x6b\145\154\x61\163"] = $id; goto LJPDo; wUHke: $this->load->view("\x5f\164\x65\x6d\160\x6c\141\164\x65\163\x2f\144\x61\x73\x68\x62\x6f\x61\162\144\x2f\137\x68\x65\x61\x64\x65\x72", $data); goto BZcSR; S1bpo: $data["\147\165\x72\x75"] = $this->kelas->getWaliKelas($tp->id_tp, $smt->id_smt); goto Qpd7Y; Kf3L7: $tp = $this->dashboard->getTahunActive(); goto Hps7u; ZPu1k: $this->load->view("\x5f\x74\x65\x6d\160\x6c\141\x74\x65\x73\x2f\144\x61\163\x68\142\x6f\141\162\x64\57\x5f\146\157\x6f\x74\145\x72"); goto w0Tic; Hps7u: $smt = $this->dashboard->getSemesterActive(); goto BQiK1; xYpeL: $data["\163\x6d\164"] = $this->dashboard->getSemester(); goto xWb9v; CKkYB: $data["\x6c\x65\166\145\x6c"] = $this->kelas->getLevel($setting->jenjang); goto S1bpo; LJPDo: $data["\153\145\154\141\163"] = $this->kelas->get_one($id); goto GLXRv; iOc8P: $data["\x74\160\x5f\141\x63\x74\151\x76\x65"] = $tp; goto xYpeL; w0Tic: } public function save() { goto Pw3v9; pYmtB: $this->db->where("\151\x64\x5f\x6a\x61\x62\x61\x74\x61\x6e\137\x67\x75\x72\165", $guru_id . $id_tp . $id_smt); goto Xaww_; SCBr0: goto PzACV; goto sVoOt; TqqNP: ejnQ1: goto j4tLi; caRhm: $data["\x69\156\x73\x65\x72\x74"] = $insert; goto v6Z3v; laiRr: cnkxy: goto caRhm; nigFi: goto wdy9i; goto YcMon; GmEOx: $config = array(array("\146\x69\145\154\x64" => "\156\141\x6d\x61\137\x6b\145\x6c\x61\163", "\x6c\x61\x62\x65\154" => "\116\141\155\141\x20\x4b\x65\x6c\141\x73", "\x72\x75\154\145\163" => "\164\162\151\155"), array("\146\151\x65\x6c\x64" => "\x6b\x6f\144\145\x5f\x6b\x65\154\x61\x73", "\x6c\141\x62\145\x6c" => "\113\157\x64\145\x20\113\x65\154\x61\163", "\x72\x75\x6c\145\x73" => "\164\x72\151\155"), array("\x66\x69\145\154\x64" => "\152\165\x72\x75\x73\x61\156\137\x69\144", "\x6c\141\x62\145\154" => "\112\x75\162\x75\x73\x61\x6e", "\162\165\x6c\145\163" => "\164\x72\151\155"), array("\x66\x69\145\154\x64" => "\154\x65\166\x65\154\137\x69\144", "\x6c\x61\142\x65\154" => "\114\x65\166\145\x6c", "\162\165\x6c\145\x73" => "\164\x72\151\x6d"), array("\146\x69\145\x6c\144" => "\x67\x75\x72\x75\137\151\144", "\x6c\141\142\x65\154" => "\107\x75\162\165", "\x72\165\154\x65\x73" => "\164\162\151\155"), array("\146\x69\145\x6c\144" => "\163\151\163\x77\141\137\151\x64", "\154\141\142\x65\154" => "\x53\151\x73\167\x61", "\x72\165\x6c\x65\163" => "\x74\x72\x69\155")); goto u0dce; Ur69n: $this->db->where("\x69\144\x5f\153\x65\x6c\x61\163", $id); goto YL0kG; ubwOk: $guru_id = strip_tags($this->input->post("\147\165\162\x75\x5f\x69\x64", TRUE)); goto OnswR; Xaww_: $updated = $this->db->update("\x6a\x61\x62\x61\x74\x61\156\x5f\x67\x75\x72\x75"); goto Zje1T; GTX_U: $id_new = $this->db->insert_id(); goto TqqNP; fuR_7: ul0No: goto d3U0M; l5cbN: $data["\163\x69\163\167\141"] = $siswa_inserted; goto Y4jBp; MPVZB: YNlAI: goto l5cbN; cNTcP: goto ejnQ1; goto BNsv_; ETC31: if (!$status) { goto YNlAI; } goto f2jIG; zvtn7: if (!($idsiswa != null)) { goto ul0No; } goto fwu5t; oUojj: fNK2r: goto HrGMY; WvDjx: $id_siswa = isset($siswas[$i]) ? $siswas[$i] : null; goto LMPMh; x8hj5: $insert[$id_tp . $id_smt . $idsiswa]["\151\144\x5f\153\x65\154\x61\x73"] = $new_id_kelas; goto vNfid; RNd8y: $insert = []; goto MO487; v6Z3v: sJqHC: goto MPVZB; GnFWA: $jumlah = serialize($siswakelas); goto y_ywX; hgxRJ: $data["\x73\x74\141\164\x75\x73"] = $status; goto Cztbq; hD1I8: $idsiswa = isset($siswas[$i]) ? $siswas[$i] : null; goto dIbj1; elKKx: kYwkf: goto x8hj5; PC4x0: c94s9: goto Ur69n; BcAov: $updated = false; goto xX51a; xX51a: $siswa_inserted = 0; goto ETC31; BLXtx: $status = FALSE; goto sFATE; gw_GS: Q3evT: goto qotw6; qWmhb: $id_smt = $this->master->getSemesterActive()->id_smt; goto V9G4v; f2jIG: $this->db->set("\x69\144\137\153\145\154\141\x73", $id); goto pYmtB; e4SF0: $status = FALSE; goto cNTcP; sFATE: goto O3SSt; goto PC4x0; HrGMY: $i++; goto SCBr0; vAgVq: KCwpd: goto yR085; bctTa: $this->form_validation->set_rules($config); goto EB5Ug; MOI7d: $insert[$id_tp . $id_smt . $idsiswa] = ["\151\x64\x5f\x6b\145\x6c\141\163\137\163\x69\x73\x77\141" => $id_tp . $id_smt . $idsiswa, "\x69\144\x5f\164\x70" => $id_tp, "\x69\144\x5f\x73\x6d\164" => $id_smt, "\x69\144\x5f\x6b\145\154\x61\163" => $new_id_kelas, "\151\x64\x5f\x73\151\x73\167\141" => $idsiswa]; goto xA54N; sVoOt: UWvBy: goto GnFWA; BNsv_: u3Tv3: goto izu7S; xHLXj: PzACV: goto uBw4H; y_ywX: $insert = array("\x6e\141\x6d\141\x5f\153\145\x6c\141\163" => strip_tags($this->input->post("\x6e\x61\x6d\141\x5f\153\145\154\141\x73", TRUE)), "\153\x6f\144\145\x5f\x6b\145\x6c\x61\x73" => strip_tags($this->input->post("\153\157\x64\x65\137\x6b\x65\x6c\141\x73", TRUE)), "\152\x75\162\165\163\141\156\137\151\144" => strip_tags($this->input->post("\x6a\x75\162\x75\x73\x61\156\x5f\x69\144", TRUE)), "\x69\144\137\164\x70" => $id_tp, "\x69\144\x5f\x73\155\x74" => $id_smt, "\154\145\x76\x65\154\137\x69\x64" => strip_tags($this->input->post("\154\145\x76\145\x6c\x5f\151\144", TRUE)), "\x67\x75\x72\x75\137\x69\x64" => strip_tags($this->input->post("\147\165\x72\165\137\151\144", TRUE)), "\x73\x69\x73\167\x61\x5f\151\x64" => strip_tags($this->input->post("\163\x69\x73\x77\141\137\151\x64", TRUE)), "\x6a\x75\x6d\x6c\x61\x68\137\x73\151\163\167\x61" => $jumlah); goto bl5AA; xA54N: goto G22Un; goto elKKx; d3U0M: WJILq: goto z0HIi; MzCSP: if ($id != null && $id != '') { goto KCwpd; } goto bctTa; dFfZD: gCTI5: goto gw_GS; Cztbq: $this->output_json($data); goto JunkF; eYv3u: foreach ($insert as $ins) { goto yhOB8; yhOB8: if (!$this->db->replace("\153\145\154\x61\163\137\163\x69\x73\x77\x61", $ins)) { goto SA_79; } goto q3w4d; QLqmV: SA_79: goto bVK0t; q3w4d: $siswa_inserted++; goto QLqmV; bVK0t: Sl5xH: goto jDlGn; jDlGn: } goto laiRr; OnswR: $id_tp = $this->master->getTahunActive()->id_tp; goto qWmhb; dOtJQ: Gpu2d: goto dFfZD; YL0kG: $status = $this->db->update("\x6d\x61\x73\164\x65\162\x5f\153\x65\154\x61\x73", $insert); goto cxG4j; izu7S: $status = $this->db->insert("\x6d\141\163\x74\145\162\x5f\153\145\154\x61\163", $insert); goto GTX_U; LMPMh: if (!($id_siswa != null)) { goto MQpS2; } goto cqu1G; EB5Ug: if ($this->form_validation->run() == TRUE) { goto u3Tv3; } goto e4SF0; TTgR3: DI3gT: goto BcAov; u_MrK: $i = 0; goto xHLXj; wgP4f: wdy9i: goto jQA_y; uBw4H: if (!($i <= count($siswas))) { goto UWvBy; } goto WvDjx; x8FZx: $siswa_kelas = $this->kelas->get_status_siswa_kelas($id, $id_tp, $id_smt); goto DAiSp; z0HIi: $i++; goto nigFi; qotw6: $i = 0; goto wgP4f; DAiSp: if (!(count($siswa_kelas) > 0)) { goto gCTI5; } goto n1GdE; bl5AA: $id_new = null; goto MzCSP; vNfid: G22Un: goto fuR_7; j4tLi: goto DI3gT; goto vAgVq; tvn8w: if ($this->form_validation->run() == TRUE) { goto c94s9; } goto BLXtx; Y4jBp: $data["\x75\x70\144\141\164\x65"] = $updated; goto hgxRJ; Pw3v9: $id = $this->input->post("\x69\144\137\x6b\145\x6c\141\x73", true); goto ubwOk; cqu1G: array_push($siswakelas, ["\x69\x64" => $id_siswa]); goto Kmk_t; cxG4j: O3SSt: goto TTgR3; jQA_y: if (!($i <= count($siswas))) { goto mO9i5; } goto hD1I8; fwu5t: if (isset($insert[$id_tp . $id_smt . $idsiswa])) { goto kYwkf; } goto MOI7d; yR085: $this->form_validation->set_rules($config); goto tvn8w; MO487: if (!($id != null && $id != '')) { goto Q3evT; } goto x8FZx; Kmk_t: MQpS2: goto oUojj; YcMon: mO9i5: goto eYv3u; dIbj1: $new_id_kelas = $id != null && $id != '' ? $id : $id_new; goto zvtn7; Zje1T: if (!$updated) { goto sJqHC; } goto RNd8y; u0dce: $siswakelas = []; goto u_MrK; n1GdE: foreach ($siswa_kelas as $id_siswa => $sis) { $insert[$id_tp . $id_smt . $id_siswa] = ["\151\144\137\x6b\145\154\x61\163\137\x73\151\163\167\141" => $id_tp . $id_smt . $id_siswa, "\151\x64\137\164\x70" => $id_tp, "\151\144\x5f\x73\155\164" => $id_smt, "\151\x64\x5f\x6b\x65\x6c\141\163" => 0, "\x69\x64\137\x73\151\x73\167\141" => $id_siswa]; FPc0m: } goto dOtJQ; V9G4v: $siswas = $this->input->post("\163\x69\x73\x77\141", true); goto GmEOx; JunkF: } public function update_kelas($id) { goto ULy74; GbTBO: $id_smt = $this->master->getSemesterActive()->id_smt; goto EeoKY; PgzRt: $i = 0; goto OY9SE; EeoKY: $siswakelas = $this->kelas->get_status_siswa_kelas($id, $id_tp, $id_smt); goto V42Yt; DUE0m: EWQpc: goto e1acB; TJILS: gGnZ_: goto TMl3i; Qa3JR: $i++; goto ImCl_; ULy74: $id_tp = $this->master->getTahunActive()->id_tp; goto GbTBO; xbCU1: C8W28: goto Qa3JR; XGdMR: if (!($i <= $rowsSelect)) { goto EWQpc; } goto q47aF; e1acB: return $siswakelas; goto ftGyh; q47aF: $id_siswa = $this->input->post("\x73\x69\x73\x77\x61\x5b" . $i . "\135", true); goto Op7GU; jSJc5: $this->db->replace("\153\x65\x6c\x61\163\137\x73\x69\x73\x77\141", $insert); goto goOlB; TMl3i: $rowsSelect = count($this->input->post("\x73\151\x73\x77\x61", true)); goto PgzRt; Yu1HI: foreach ($siswakelas as $id_siswa => $sis) { goto Bur_y; V4Rj3: $this->db->replace("\153\x65\x6c\x61\x73\x5f\163\151\x73\x77\141", $insert); goto CxC5j; CxC5j: GQJKo: goto pXGso; Bur_y: $insert = ["\151\x64\137\153\145\x6c\x61\x73\137\x73\151\163\167\x61" => $id_tp . $id_smt . $id_siswa, "\x69\x64\x5f\164\160" => $id_tp, "\x69\144\x5f\163\x6d\164" => $id_smt, "\x69\144\x5f\x6b\145\154\x61\163" => 0, "\151\144\137\163\x69\x73\x77\141" => $id_siswa]; goto V4Rj3; pXGso: } goto aKvMJ; OY9SE: fab3l: goto XGdMR; goOlB: S5AiC: goto xbCU1; mAar1: $insert = ["\151\144\x5f\x6b\145\x6c\x61\163\x5f\x73\151\x73\167\141" => $id_tp . $id_smt . $id_siswa, "\151\x64\x5f\164\x70" => $id_tp, "\x69\x64\137\x73\155\164" => $id_smt, "\x69\x64\x5f\x6b\145\x6c\141\x73" => $id, "\x69\x64\x5f\x73\x69\163\167\x61" => $id_siswa]; goto jSJc5; ImCl_: goto fab3l; goto DUE0m; Op7GU: if (!($id_siswa != null)) { goto S5AiC; } goto mAar1; aKvMJ: San6C: goto TJILS; V42Yt: if (!(count($siswakelas) > 0)) { goto gGnZ_; } goto Yu1HI; ftGyh: } public function manage() { goto s410i; vFl2V: $data["\164\160\x5f\141\x63\x74\151\x76\145"] = $tp; goto IT41G; At34z: $data["\164\160"] = $this->dashboard->getTahun(); goto vFl2V; lO2vj: $this->load->view("\155\x61\x73\x74\x65\x72\x2f\x6b\x65\x6c\x61\163\x2f\160\145\162\x73\x65\x6d\145\x73\164\x65\x72"); goto PsYhA; IJjDi: $data["\153\x65\x6c\141\163\x32"] = $this->dropdown->getAllKelas($tp->id_tp, "\62"); goto XWTxg; s410i: $user = $this->ion_auth->user()->row(); goto AEx1X; XWTxg: $this->load->view("\137\164\145\155\160\x6c\141\164\x65\x73\x2f\144\141\163\x68\142\x6f\x61\162\144\57\137\x68\145\x61\x64\x65\x72", $data); goto lO2vj; PsYhA: $this->load->view("\137\164\145\x6d\160\x6c\x61\164\145\x73\x2f\144\141\163\x68\x62\157\x61\x72\x64\57\x5f\146\157\157\164\x65\162"); goto itEp8; RKPEL: $tp = $this->dashboard->getTahunActive(); goto t265L; OGydL: $data["\153\x65\154\141\163"] = $this->dropdown->getAllKelas($tp->id_tp, "\x31"); goto IJjDi; t265L: $smt = $this->dashboard->getSemesterActive(); goto At34z; AEx1X: $data = ["\x75\163\x65\x72" => $user, "\x6a\165\x64\x75\154" => "\x43\x6f\x70\x79\40\113\145\x6c\x61\163", "\163\x75\x62\x6a\165\x64\x75\154" => "\103\157\x70\x79\40\104\141\164\x61\x20\x4b\145\x6c\141\x73\40\153\x65\40\x53\115\124\x20\111\111", "\163\145\164\x74\x69\x6e\x67" => $this->dashboard->getSetting()]; goto RKPEL; IT41G: $data["\163\155\x74"] = $this->dashboard->getSemester(); goto Z3lhO; eLj0g: $data["\160\162\157\x66\151\154\145"] = $this->dashboard->getProfileAdmin($user->id); goto OGydL; Z3lhO: $data["\x73\155\x74\137\141\143\164\151\166\x65"] = $smt; goto eLj0g; itEp8: } public function getFromSmt1($kelas) { goto ss_4O; VJmVf: foreach ($data2 as $s) { $ids[] = $s->id_siswa; p2hzi: } goto sfhRJ; sfhRJ: IlVDs: goto R9aOm; R9aOm: o2nMv: goto fSYe1; ss_4O: $tp = $this->dashboard->getTahunActive(); goto xgXMD; D1Qpv: if (!(count($data2) > 0)) { goto o2nMv; } goto VJmVf; fSYe1: $this->output_json(["\163\155\x74\61" => $data1, "\x73\x6d\164\62" => $ids]); goto H9Mx0; kO3Eg: $data2 = $this->kelas->getKelasSiswa($kelas, $tp->id_tp, "\x32"); goto pvYYV; xgXMD: $data1 = $this->kelas->getKelasSiswa($kelas, $tp->id_tp, "\61"); goto kO3Eg; pvYYV: $ids = []; goto D1Qpv; H9Mx0: } public function copyFromSmt1() { goto mATq9; ERLbf: $idk = $this->db->insert_id(); goto z1IZN; amBOQ: $kelas1 = $this->input->post("\153\x65\154\141\x73\x5f\154\141\x6d\141", true); goto XRVNY; q1Jj9: $this->db->insert("\x6d\x61\x73\164\x65\162\137\153\145\154\141\163", $data); goto ERLbf; Udnui: $smt = $this->dashboard->getSemesterActive(); goto amBOQ; r7F8N: MJkhK: goto l5UCg; z1IZN: $res = []; goto z_iZE; XRVNY: $kelas2 = $this->input->post("\x6b\x65\x6c\x61\x73\137\142\x61\x72\x75", true); goto F4jXF; z_iZE: $arrSiswa = unserialize($kelas->jumlah_siswa); goto V2vXW; F4jXF: $kelas = $this->kelas->get_one($kelas1, $tp->id_tp, "\61"); goto laRMi; laRMi: $data = array("\156\141\155\x61\x5f\x6b\x65\x6c\x61\163" => $kelas2, "\x6b\x6f\x64\145\137\153\145\154\x61\x73" => $kelas->kode_kelas, "\x6a\x75\x72\x75\x73\141\156\137\151\144" => $kelas->jurusan_id, "\x69\x64\x5f\164\x70" => $tp->id_tp, "\151\x64\137\163\x6d\164" => $smt->id_smt, "\154\145\x76\145\154\137\151\144" => $kelas->level_id, "\147\x75\162\x75\137\151\x64" => $kelas->guru_id, "\x73\x69\x73\x77\x61\x5f\x69\144" => $kelas->siswa_id, "\x6a\x75\x6d\154\x61\150\137\x73\151\x73\167\141" => $kelas->jumlah_siswa); goto q1Jj9; V2vXW: foreach ($arrSiswa as $value) { goto OlQms; RTbm2: $insert = ["\x69\144\137\x6b\145\154\x61\163\137\x73\x69\x73\x77\141" => $tp->id_tp . $smt->id_smt . $id_siswa, "\151\x64\137\x74\x70" => $tp->id_tp, "\151\x64\137\163\155\x74" => $smt->id_smt, "\151\144\x5f\x6b\x65\x6c\x61\163" => $idk, "\151\x64\137\163\151\x73\x77\x61" => $id_siswa]; goto J0ak0; e7MEY: OxGXO: goto Gixga; Gixga: cxNV1: goto l2j03; J0ak0: $res[] = $this->db->replace("\153\145\154\x61\x73\x5f\163\151\163\167\x61", $insert); goto e7MEY; OlQms: $id_siswa = $value["\x69\144"]; goto MaHqg; MaHqg: if (!($id_siswa != null)) { goto OxGXO; } goto RTbm2; l2j03: } goto r7F8N; mATq9: $tp = $this->dashboard->getTahunActive(); goto Udnui; l5UCg: $this->output_json($res); goto iZnSQ; iZnSQ: } public function copySiswaFromSmt1() { goto Wz1uS; YxpeN: foreach ($posts as $d) { goto BFLbh; TFHSM: PCjVw: goto SH5CH; YHtFj: $siswakelas[$d->id_kelas][] = ["\x69\x64" => $d->id_siswa]; goto TFHSM; BFLbh: $idkelases[] = $d->id_kelas; goto YHtFj; SH5CH: } goto RmH6D; wCLEb: $idkelases = array_unique($idkelases); goto y3i3C; RmH6D: gm2nA: goto wCLEb; qJGlw: foreach ($idkelases as $ik) { goto NjLRI; WDXd1: $idk = $this->db->insert_id(); goto G7m_G; xQXU4: SHmiG: goto V88hP; I0N2y: Zi3AO: goto LAa2C; difW8: $kelas = $this->kelas->get_one($ik, $tp->id_tp, "\61"); goto ODscb; iRIMk: $data = array("\156\x61\x6d\x61\137\153\145\x6c\141\x73" => $kelas->nama_kelas, "\x6b\157\144\x65\x5f\153\145\154\x61\x73" => $kelas->kode_kelas, "\x6a\x75\x72\x75\x73\x61\156\x5f\151\144" => $kelas->jurusan_id, "\151\x64\x5f\164\x70" => $tp->id_tp, "\151\x64\137\163\155\164" => $smt->id_smt, "\154\x65\166\145\x6c\137\x69\144" => $kelas->level_id, "\x67\165\162\x75\x5f\151\x64" => $kelas->guru_id, "\x73\151\163\167\141\x5f\151\144" => $kelas->siswa_id, "\x6a\x75\x6d\x6c\x61\x68\137\x73\151\163\x77\x61" => $jumlah); goto xzyVD; V88hP: G7Qud: goto I0N2y; NjLRI: if (!($ik != '')) { goto G7Qud; } goto difW8; G7m_G: foreach ($siswakelas[$ik] as $s) { goto XCt6D; XCt6D: $insert = ["\151\x64\137\153\x65\x6c\x61\x73\137\163\x69\x73\167\141" => $tp->id_tp . $smt->id_smt . $s["\151\144"], "\151\x64\137\x74\x70" => $tp->id_tp, "\x69\144\137\x73\155\164" => $smt->id_smt, "\151\x64\137\x6b\x65\154\141\163" => $idk, "\x69\x64\x5f\163\x69\163\x77\x61" => $s["\x69\144"]]; goto SQJxX; SQJxX: $res[] = $this->db->replace("\153\145\x6c\141\163\137\x73\151\163\167\x61", $insert); goto CrP9b; CrP9b: pSwu1: goto wIh0R; wIh0R: } goto xQXU4; ODscb: $jumlah = serialize($siswakelas[$ik]); goto iRIMk; xzyVD: $this->db->insert("\155\141\163\164\145\162\x5f\x6b\145\154\141\163", $data); goto WDXd1; LAa2C: } goto GCWU4; y3i3C: $res = []; goto qJGlw; citrO: $posts = json_decode($this->input->post("\x6b\145\x6c\x61\x73", true)); goto j6XBv; AniRf: $siswakelas = []; goto YxpeN; oC7ip: $this->output_json($res); goto Jbe6e; GCWU4: Mtx1F: goto oC7ip; j6XBv: $idkelases = []; goto AniRf; Wz1uS: $tp = $this->dashboard->getTahunActive(); goto zysZd; zysZd: $smt = $this->dashboard->getSemesterActive(); goto citrO; Jbe6e: } public function kenaikan() { goto KOXJt; hLb_Y: $data["\163\151\163\167\141\163"] = $this->rapor->getKenaikanSiswa($kelas, $tp->id_tp - 1, "\62"); goto I7vPS; nMTog: $data = ["\x75\x73\145\x72" => $user, "\152\x75\144\165\x6c" => "\x4b\145\x6e\141\151\153\x6b\x61\156\x20\x4b\145\154\141\x73", "\163\165\142\152\165\144\165\x6c" => "\x4e\x61\151\153\x20\113\145\154\x61\x73\40\123\x69\163\167\141", "\x73\x65\164\164\151\x6e\147" => $setting]; goto Qx1ee; G5C3N: $data["\153\145\154\x61\x73\x5f\142\141\x72\x75"] = $this->dropdown->getAllKelas($tp->id_tp, "\x31"); goto dms5l; I7vPS: $data["\153\145\x6c\x61\163\137\163\145\154\x65\x63\x74\x65\144"] = $kelas; goto co1bd; LdUfP: $user = $this->ion_auth->user()->row(); goto VGUR0; dms5l: if (!($kelas != null)) { goto w5NVw; } goto UpyE4; akUm8: $data["\164\160"] = $this->dashboard->getTahun(); goto OKvRm; KOXJt: $kelas = $this->input->get("\153\x65\154\141\163", true); goto LdUfP; Qx1ee: $tp = $this->dashboard->getTahunActive(); goto C02J_; MgWo2: $data["\x70\x72\x6f\x66\x69\x6c\145"] = $this->dashboard->getProfileAdmin($user->id); goto pEcvk; ndjwe: $this->load->view("\155\x61\x73\x74\145\162\x2f\x6b\145\154\x61\163\x2f\x6e\x61\x69\153\x6b\145\154\141\163"); goto moLt3; JzfHv: $data["\153\x65\x6c\x61\163\145\163"] = $this->dropdown->getAllKelas($tp->id_tp - 1, "\x32", "\x3d" . ($lvlKls->level_id + 1)); goto jsbfF; iGXiL: $data["\163\x6d\164\137\141\x63\164\151\x76\x65"] = $smt; goto MgWo2; co1bd: $lvlKls = $this->kelas->get_one($kelas, $tp->id_tp - 1, "\x32"); goto JzfHv; pEcvk: $level = $setting->jenjang == "\61" ? "\x36" : ($setting->jenjang == "\62" ? "\71" : ($setting->jenjang == "\61" ? "\63" : "\61\62")); goto zD1E7; zD1E7: $data["\153\x65\x6c\141\163\137\154\141\155\x61"] = $this->dropdown->getAllKelas($tp->id_tp - 1, "\62", "\41\x3d" . $level); goto G5C3N; DcucB: $this->load->view("\x5f\164\145\155\x70\154\x61\164\145\163\57\x64\x61\x73\x68\142\157\141\x72\144\x2f\x5f\x68\145\141\144\145\162", $data); goto ndjwe; OKvRm: $data["\164\x70\x5f\x61\143\x74\151\166\x65"] = $tp; goto RSQ3B; moLt3: $this->load->view("\x5f\x74\x65\155\x70\x6c\x61\x74\x65\163\57\144\x61\163\x68\x62\157\141\x72\x64\57\x5f\146\157\x6f\x74\x65\162"); goto hcmIC; jsbfF: w5NVw: goto DcucB; UpyE4: $data["\163\x69\x73\x77\141\137\153\145\154\x61\163\137\142\141\162\165"] = $this->master->getSiswaKelasBaru($tp->id_tp, $smt->id_smt); goto hLb_Y; C02J_: $smt = $this->dashboard->getSemesterActive(); goto akUm8; VGUR0: $setting = $this->dashboard->getSetting(); goto nMTog; RSQ3B: $data["\163\x6d\x74"] = $this->dashboard->getSemester(); goto iGXiL; hcmIC: } public function naikKelas() { goto p1ms3; VCuGB: $posts = json_decode($this->input->post("\x6b\x65\154\x61\x73", true)); goto iskez; gttQ3: gKl9e: goto xqIv4; BM3zg: $smt = $this->dashboard->getSemesterActive(); goto VCuGB; YHTyG: foreach ($idkelases as $ik) { goto iocL2; oqACF: gltNw: goto w_rw2; MdXqG: vhz_7: goto f8_IY; YfmjF: array_push($idks, $kelas_baru->id_kelas); goto Q3vdp; hVNGh: R67cq: goto KQMTM; nTR_P: if ($mode == "\160\x65\x72\x73\151\163\167\x61") { goto R67cq; } goto Z6Rxj; Z6Rxj: $jumlah = serialize($siswakelas[$ik]); goto YfmjF; M2PA_: Ll2kM: goto DaMEi; tOEEy: $kelas_baru = $this->kelas->getKelasByNama($kelas->nama_kelas, $tp->id_tp, $smt->id_smt); goto qwI2b; pAsCu: Jj6us: goto FS2Cz; f8_IY: foreach ($idks as $idk) { goto k3kiC; k3kiC: foreach ($siswakelas[$ik] as $s) { goto uuzBf; wxrjS: aiDnw: goto GAMXk; uuzBf: $insert = ["\151\x64\137\x6b\145\154\x61\x73\x5f\x73\x69\163\167\141" => $tp->id_tp . $smt->id_smt . $s["\151\144"], "\151\144\x5f\164\x70" => $tp->id_tp, "\151\144\x5f\x73\x6d\164" => $smt->id_smt, "\151\144\x5f\153\145\x6c\x61\x73" => $idk, "\151\144\x5f\163\151\x73\x77\141" => $s["\x69\x64"]]; goto uLntI; uLntI: $res[] = $this->db->replace("\x6b\145\x6c\141\163\137\x73\151\x73\x77\x61", $insert); goto wxrjS; GAMXk: } goto vnVwR; cqdSA: fjChV: goto VZ10V; vnVwR: SIr8K: goto cqdSA; VZ10V: } goto t7TKn; Nikyc: foreach ($siswakelas[$ik] as $s) { goto VAcB0; eZ7nz: Z98m4: goto RnTKn; VAcB0: foreach ($jmlLama as $lama) { goto t9sGP; en5NP: snms4: goto FLPFG; t9sGP: if (!($lama["\151\144"] != $s["\151\144"])) { goto snms4; } goto F6ILW; F6ILW: array_push($jmlLama, ["\x69\x64" => $s["\151\x64"]]); goto xTYhH; xTYhH: array_push($idks, $kelas_baru->id_kelas); goto en5NP; FLPFG: ouzCe: goto YXvIC; YXvIC: } goto eZ7nz; RnTKn: HZRQe: goto q8Fky; q8Fky: } goto oqACF; eQoSn: $this->db->insert("\155\x61\163\x74\145\x72\137\153\145\154\x61\163", $data); goto XfltW; w_rw2: $jumlah = serialize($jmlLama); goto JM24n; uaMxb: $data = array("\x6e\141\x6d\x61\x5f\153\x65\x6c\x61\163" => $kelas->nama_kelas, "\x6b\157\x64\x65\x5f\x6b\x65\154\141\x73" => $kelas->kode_kelas, "\x6a\x75\162\x75\163\141\x6e\137\x69\144" => $kelas->jurusan_id, "\x69\x64\137\x74\x70" => $tp->id_tp, "\x69\x64\x5f\x73\x6d\164" => $smt->id_smt, "\154\x65\166\145\x6c\x5f\x69\144" => $kelas->level_id, "\x67\165\x72\x75\x5f\x69\x64" => $kelas->guru_id, "\163\x69\x73\167\x61\137\x69\x64" => $kelas->siswa_id, "\x6a\x75\155\154\x61\150\137\163\151\x73\167\x61" => $jumlah); goto rbR1O; iocL2: $kelas = $this->kelas->get_one($ik, $tp->id_tp - 1, "\62"); goto tOEEy; Q3vdp: goto fTdLn; goto hVNGh; qwI2b: if ($kelas_baru == null) { goto Ll2kM; } goto nTR_P; KQMTM: $jmlLama = unserialize($kelas_baru->jumlah_siswa); goto Nikyc; t7TKn: FEibP: goto pAsCu; gQ6Yc: $this->db->update("\155\141\x73\x74\x65\x72\x5f\153\145\154\141\x73", $data); goto PTpmA; PTpmA: goto vhz_7; goto M2PA_; rbR1O: $this->db->where("\151\x64\x5f\x6b\x65\x6c\x61\163", $kelas_baru->id_kelas); goto gQ6Yc; DaMEi: $jumlah = serialize($siswakelas[$ik]); goto pmaVg; XfltW: array_push($idks, $this->db->insert_id()); goto MdXqG; JM24n: fTdLn: goto uaMxb; pmaVg: $data = array("\156\x61\x6d\x61\137\x6b\x65\154\141\163" => $kelas->nama_kelas, "\153\x6f\144\145\137\153\x65\x6c\141\x73" => $kelas->kode_kelas, "\152\165\x72\x75\x73\x61\156\x5f\151\144" => $kelas->jurusan_id, "\x69\x64\x5f\164\x70" => $tp->id_tp, "\x69\144\137\x73\155\164" => $smt->id_smt, "\154\x65\x76\x65\x6c\137\x69\144" => $kelas->level_id, "\x67\165\x72\165\x5f\151\x64" => $kelas->guru_id, "\163\151\163\x77\141\x5f\151\x64" => $kelas->siswa_id, "\152\x75\x6d\x6c\141\150\137\x73\x69\x73\167\141" => $jumlah); goto eQoSn; FS2Cz: } goto Lzy07; v8Udr: $data["\x72\x65\x73"] = $siswakelas; goto jd6K2; p1ms3: $tp = $this->dashboard->getTahunActive(); goto BM3zg; jd6K2: $this->output_json($data); goto yGeHX; xqIv4: $idkelases = array_unique($idkelases); goto Tdkv8; eYKr8: $siswakelas = []; goto ahFXG; iskez: $mode = $this->input->post("\x6d\x6f\144\x65", true); goto Kx52b; ahFXG: foreach ($posts as $d) { goto IhzxI; IhzxI: $idkelases[] = $d->kelas_baru; goto sNFA_; sNFA_: $siswakelas[$d->kelas_baru][] = ["\x69\144" => $d->id_siswa]; goto d50VE; d50VE: XhIvH: goto PYzMI; PYzMI: } goto gttQ3; q9iUl: $idks = []; goto YHTyG; Kx52b: $idkelases = []; goto eYKr8; Tdkv8: $res = []; goto q9iUl; Lzy07: EZYMu: goto v8Udr; yGeHX: } public function hapus($id_kelas) { goto Uq_9o; Uq_9o: $delete["\163\151\163\x77\x61"] = $this->master->delete("\x6b\x65\154\x61\163\x5f\163\151\163\x77\x61", $id_kelas, "\151\144\137\x6b\145\x6c\x61\x73"); goto rJ3Pg; rJ3Pg: $delete["\x6b\x65\x6c\141\x73"] = $this->master->delete("\155\141\x73\x74\x65\x72\137\x6b\x65\x6c\141\x73", $id_kelas, "\151\x64\x5f\x6b\145\x6c\141\163"); goto mAbUP; mAbUP: $this->output_json($delete); goto A0QLm; A0QLm: } }
