<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Pengumuman extends CI_Controller { public function __construct() { goto DU3j2; AjoWi: goto NSB3d; goto GRyf0; PmEhO: kKcPg: goto AjoWi; GhvXC: $this->load->model("\115\x61\163\164\x65\x72\x5f\155\157\144\145\x6c", "\x6d\141\163\164\x65\x72"); goto xaCFy; xaCFy: $this->load->model("\x44\141\163\150\x62\x6f\x61\162\x64\137\x6d\x6f\x64\x65\154", "\x64\x61\163\150\142\157\141\162\144"); goto T27sl; JedBz: show_error("\x48\x61\156\x79\x61\40\x41\x64\x6d\x69\x6e\x69\x73\x74\162\141\x74\157\162\x20\144\141\x6e\x20\147\x75\x72\165\x20\x79\141\x6e\147\x20\x64\151\142\145\162\151\x20\x68\x61\153\40\x75\156\x74\x75\x6b\x20\155\x65\156\147\141\x6b\x73\145\163\40\x68\141\154\x61\x6d\141\x6e\40\151\156\151\x2c\x20\x3c\141\40\150\162\145\146\75\x22" . base_url("\x64\141\x73\150\x62\x6f\x61\x72\144") . "\42\x3e\113\x65\x6d\x62\x61\x6c\151\x20\153\x65\x20\x6d\145\156\x75\40\141\x77\x61\x6c\x3c\57\141\76", 403, "\101\x6b\163\x65\163\40\x54\145\162\x6c\x61\162\x61\156\x67"); goto PmEhO; kUscq: NSB3d: goto YzV2f; YzV2f: $this->load->library(["\144\141\x74\x61\164\x61\142\154\145\163", "\x66\x6f\x72\x6d\137\x76\141\x6c\x69\x64\x61\164\x69\x6f\x6e"]); goto GhvXC; beGTS: redirect("\x61\165\x74\x68"); goto kUscq; xnTMY: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\x75\162\x75"))) { goto kKcPg; } goto JedBz; VcQi8: $this->form_validation->set_error_delimiters('', ''); goto UQ395; T27sl: $this->load->model("\x4b\145\x6c\x61\163\x5f\x6d\x6f\x64\145\x6c", "\153\x65\x6c\x61\163"); goto be57i; be57i: $this->load->model("\104\x72\x6f\x70\x64\x6f\167\156\x5f\155\157\144\145\154", "\144\162\157\160\x64\x6f\x77\x6e"); goto dszuN; DU3j2: parent::__construct(); goto yffNf; dszuN: $this->load->model("\x50\157\163\164\x5f\155\x6f\144\145\x6c", "\160\157\x73\164"); goto VcQi8; yffNf: if (!$this->ion_auth->logged_in()) { goto WozZs; } goto xnTMY; GRyf0: WozZs: goto beGTS; UQ395: } public function output_json($data, $encode = true) { goto mHO21; mHO21: if (!$encode) { goto dbiAD; } goto GxDCV; lRuDL: $this->output->set_content_type("\141\160\160\154\x69\x63\x61\164\x69\x6f\156\57\152\x73\x6f\x6e")->set_output($data); goto knQ0V; GxDCV: $data = json_encode($data); goto k2el4; k2el4: dbiAD: goto lRuDL; knQ0V: } public function index() { goto ZKTYG; mOdrz: $data["\163\165\142\152\165\x64\x75\154"] = "\x53\145\155\165\141\40\120\x65\x6e\x67\x75\155\165\x6d\141\x6e"; goto ML7WP; rtLEF: $data["\147\x75\162\x75\x73"] = $this->dropdown->getAllGuru(); goto zLmCY; tpCmY: $this->load->view("\155\145\x6d\x62\x65\162\x73\x2f\x67\165\x72\x75\x2f\x74\x65\155\x70\x6c\141\164\145\x73\57\x68\145\141\x64\x65\162", $data); goto muBj0; tSA5O: $data["\164\160"] = $this->dashboard->getTahun(); goto dDNfu; dDNfu: $data["\x74\160\x5f\141\143\x74\151\166\x65"] = $tp; goto BXbDn; ZKTYG: $user = $this->ion_auth->user()->row(); goto hkukT; vXupC: $data["\x70\145\156\x67\165\x6d\x75\x6d\141\156\163"] = $this->post->getPostUser(0); goto VU56V; HpqVc: $this->load->view("\160\x65\156\x67\x75\x6d\165\x6d\x61\156\x2f\x64\x61\x74\141"); goto IBJ9c; hkukT: $data = ["\165\x73\145\x72" => $user, "\152\x75\x64\165\154" => "\120\x65\156\147\x75\x6d\165\x6d\x61\x6e", "\163\145\164\x74\151\156\147" => $this->dashboard->getSetting()]; goto zx5Hb; bPaNi: $data["\x73\155\x74\x5f\141\x63\164\151\166\x65"] = $smt; goto rtLEF; syQjF: $data["\x72\x75\x6e\156\x69\156\147\137\164\x65\170\164"] = $this->dashboard->getRunningText(); goto ilekA; FePba: $data["\147\x75\162\165"] = $guru; goto evXNl; muBj0: $this->load->view("\160\145\x6e\147\165\155\165\x6d\x61\x6e\x2f\x64\x61\x74\x61"); goto xw2H1; VU56V: $this->load->view("\x5f\164\145\155\160\154\x61\x74\145\163\57\144\141\163\150\x62\157\141\162\x64\57\137\x68\145\x61\x64\x65\x72", $data); goto HpqVc; rYWQd: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto FePba; TGECy: udznR: goto v0y9f; IBJ9c: $this->load->view("\x5f\x74\x65\155\160\x6c\x61\x74\145\x73\x2f\144\141\163\x68\142\157\141\162\144\57\x5f\x66\x6f\157\164\x65\162"); goto TGECy; EaYoY: $data["\153\x65\154\x61\163"] = $kelas; goto syQjF; NqFog: $smt = $this->master->getSemesterActive(); goto tSA5O; BXbDn: $data["\x73\x6d\x74"] = $this->dashboard->getSemester(); goto bPaNi; xw2H1: $this->load->view("\155\145\x6d\x62\145\x72\x73\57\x67\165\162\165\x2f\164\145\x6d\160\154\141\x74\145\163\57\146\157\157\164\x65\x72"); goto PEipO; PEipO: goto udznR; goto Wpwve; evXNl: $data["\x70\145\x6e\x67\165\x6d\x75\155\141\x6e\163"] = $this->post->getPostUser($guru->id_guru); goto tpCmY; Wpwve: bpmDc: goto mOdrz; zx5Hb: $tp = $this->master->getTahunActive(); goto NqFog; ML7WP: $data["\x70\x72\x6f\146\151\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto vXupC; fojws: $data["\x73\x75\x62\152\165\144\x75\154"] = "\120\145\x6e\x67\x75\x6d\165\x6d\141\156\x20\x41\156\x64\141"; goto rYWQd; zLmCY: $kelas = $this->dropdown->getAllKeyKodeKelas($tp->id_tp, $smt->id_smt); goto EaYoY; ilekA: if ($this->ion_auth->is_admin()) { goto bpmDc; } goto fojws; v0y9f: } public function kepada($kepada, $id_kepada = null) { goto taScH; KCIYL: if ($kepada === "\163\145\155\165\141\137\163\x69\163\x77\141") { goto BhrB1; } goto wHOVQ; HcOpi: goto Yv1fR; goto G1l1L; ilwWB: $smt = $this->master->getSemesterActive(); goto czorf; Euerw: $data = ["\165\x73\x65\162" => $user, "\x6a\165\144\165\x6c" => "\x50\145\156\x67\x75\x6d\x75\x6d\x61\156", "\163\165\x62\152\165\144\165\154" => "\x53\145\x6d\x75\x61\x20\x50\x65\x6e\x67\x75\155\165\155\x61\x6e", "\163\x65\x74\x74\x69\x6e\x67" => $this->dashboard->getSetting()]; goto qLRSu; G1l1L: BhrB1: goto mv9ij; atuRZ: PsLY_: goto xJkM2; N4wH_: aubH4: goto eaLmT; qWNJt: $this->db->select("\x61\x2e\x2a\x2c\x20\x62\56\x6e\141\x6d\x61\x5f\147\165\162\165\54\x20\x62\x2e\146\157\164\157"); goto cWBdd; e2OGr: RZIu_: goto EsQNC; iSXMm: $data["\143\x6f\x6d\155\145\156\x74\163"] = $comments; goto sackW; taScH: $user = $this->ion_auth->user()->row(); goto Euerw; q1w30: $this->load->view("\x5f\x74\145\x6d\160\154\x61\x74\145\163\57\144\x61\163\x68\142\157\x61\x72\144\x2f\137\x68\x65\x61\x64\145\x72", $data); goto TIEGp; WSIYD: $data["\x73\x6d\164\137\x61\x63\164\x69\x76\x65"] = $smt; goto NJ2xY; wHOVQ: $data["\153\x65\x70\x61\x64\141"] = urldecode($kepada); goto Zub7U; SrCfK: $data["\164\x70\137\x61\143\x74\x69\x76\x65"] = $tp; goto y__cb; y__cb: $data["\163\x6d\164"] = $this->dashboard->getSemester(); goto WSIYD; cWBdd: $this->db->from("\x70\x6f\x73\164\40\141"); goto vspar; oOD_W: $comments = []; goto mPbF7; IUHt_: $data["\x6b\145\154\141\163"] = $kelas; goto qWNJt; EsQNC: $data["\153\x65\160\x61\x64\x61"] = "\123\145\155\165\x61\x20\x47\x75\x72\165"; goto HcOpi; WlIoN: $kelas = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto IUHt_; YvvoP: $this->load->view("\137\x74\x65\x6d\160\154\x61\x74\145\163\57\144\141\x73\x68\142\x6f\141\x72\x64\x2f\137\146\157\x6f\164\x65\x72"); goto atuRZ; bca_f: $this->load->view("\160\145\156\147\x75\155\165\155\141\156\x2f\x64\141\164\141"); goto FMIPq; TIEGp: $this->load->view("\160\145\156\147\x75\x6d\x75\155\x61\x6e\x2f\144\x61\x74\141"); goto YvvoP; lZKFU: $data["\x70\162\x6f\x66\x69\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto q1w30; us_YN: if ($this->ion_auth->is_admin()) { goto PioSA; } goto sEfTX; Zub7U: goto Yv1fR; goto e2OGr; bfQ1Y: PioSA: goto lZKFU; sEfTX: $data["\147\165\x72\165"] = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto s0OPm; s0OPm: $this->load->view("\155\145\155\142\x65\x72\163\x2f\147\165\x72\x75\x2f\164\145\x6d\x70\x6c\141\164\145\163\57\x68\x65\x61\144\145\162", $data); goto bca_f; czorf: $data["\x74\x70"] = $this->dashboard->getTahun(); goto SrCfK; mPbF7: $balasan = []; goto kGCvN; sackW: $data["\142\141\x6c\141\163\141\x6e\163"] = $balasan; goto obqxg; obqxg: if ($kepada === "\x73\x65\155\165\x61\x5f\x67\165\x72\x75") { goto RZIu_; } goto KCIYL; RgwmA: $pengumumans = $this->db->get()->result(); goto oOD_W; eaLmT: $data["\160\145\x6e\x67\165\155\x75\155\141\156\x73"] = $pengumumans; goto iSXMm; IjNhs: Yv1fR: goto us_YN; vspar: $this->db->join("\155\141\x73\164\145\x72\137\x67\165\162\x75\40\x62", "\141\56\144\141\x72\151\75\x62\56\x69\144\137\x67\165\x72\x75", "\154\x65\146\x74"); goto rkZee; qLRSu: $tp = $this->master->getTahunActive(); goto ilwWB; FMIPq: $this->load->view("\x6d\145\x6d\142\145\x72\163\57\147\165\x72\165\x2f\164\145\x6d\x70\x6c\141\x74\x65\163\57\146\157\157\x74\145\162"); goto N5kEP; N5kEP: goto PsLY_; goto bfQ1Y; mv9ij: $data["\x6b\145\160\x61\x64\x61"] = "\x53\145\x6d\x75\x61\x20\x53\151\x73\167\141"; goto IjNhs; NJ2xY: $data["\147\165\162\x75\163"] = $this->dropdown->getAllGuru(); goto WlIoN; kGCvN: foreach ($pengumumans as $pengumuman) { goto OdMw9; FNt8h: LX90k: goto Wi1ru; Vg6Ei: $comment = $this->db->get()->result(); goto KIC4O; kjpfC: $this->db->order_by("\141\x2e\x74\x61\x6e\147\147\x61\x6c", "\144\x65\x73\x63"); goto UaDn5; OdMw9: $this->db->select("\141\56\52\54\x20\142\56\x6e\x61\x6d\x61\x5f\x67\x75\x72\x75\x2c\40\x62\56\x66\x6f\164\157"); goto OH5WE; yE3qT: $this->db->join("\155\x61\x73\164\145\162\137\147\165\162\165\40\142", "\141\56\x64\x61\162\x69\75\142\x2e\151\144\137\x67\x75\x72\165", "\154\x65\146\164"); goto kjpfC; nVWGT: $comments[$pengumuman->id_post] = $comment; goto FNt8h; OH5WE: $this->db->from("\160\157\163\164\137\143\157\155\155\145\x6e\164\163\x20\141"); goto yE3qT; KIC4O: foreach ($comment as $comm) { goto N0kMf; G11FA: $this->db->order_by("\141\56\164\141\x6e\147\x67\141\x6c", "\x64\x65\x73\143"); goto SFzsa; UH6Sk: $this->db->join("\x6d\141\163\164\145\x72\x5f\x67\x75\162\165\x20\142", "\x61\x2e\144\x61\x72\151\75\x62\56\151\x64\x5f\x67\x75\x72\165", "\x6c\x65\146\164"); goto G11FA; N0kMf: $this->db->select("\141\56\52\x2c\40\x62\56\156\x61\155\x61\x5f\x67\165\x72\x75\54\x20\x62\56\146\x6f\x74\x6f"); goto LWs6V; hzgiz: ehrWW: goto MsUzC; SFzsa: $this->db->where("\141\56\x69\x64\x5f\143\157\155\155\x65\x6e\x74", $comm->id_comment); goto x4A0X; LWs6V: $this->db->from("\160\157\163\164\x5f\162\x65\x70\x6c\171\x20\141"); goto UH6Sk; x4A0X: $balasan[$pengumuman->id_post][$comm->id_comment] = $this->db->get()->result(); goto hzgiz; MsUzC: } goto lyf80; UaDn5: $this->db->where("\141\x2e\x69\144\x5f\160\157\163\x74", $pengumuman->id_post); goto Vg6Ei; lyf80: BWhGq: goto nVWGT; Wi1ru: } goto N4wH_; rkZee: $this->db->order_by("\141\x2e\x74\141\x6e\147\147\x61\x6c", "\x64\x65\x73\x63"); goto RgwmA; xJkM2: } public function getPost() { $post = $this->post->getPostForUser(null); $this->output_json($post); } public function getComment($id_post, $page) { goto nYBhg; kHMaH: $this->db->from("\x70\157\163\x74\137\143\157\x6d\155\145\156\164\x73\x20\x61"); goto b_ihA; Hx3Bz: $this->output_json($comment); goto ObWRX; nA8VP: $this->db->limit($perPage, $offset); goto xDERC; MPu_y: $this->db->join("\155\141\x73\164\x65\162\x5f\163\151\163\167\141\x20\x63", "\141\x2e\144\x61\x72\151\x3d\x63\56\x69\144\x5f\163\151\x73\167\141", "\x6c\x65\146\164"); goto HXKHt; aCqmQ: $this->db->where("\141\x2e\x69\x64\137\160\157\163\x74", $id_post); goto nA8VP; Uyl4U: $this->db->query("\x53\x45\124\40\123\x51\114\137\x42\111\x47\137\x53\105\x4c\105\103\124\123\x3d\61"); goto Y7azg; Y7azg: $this->db->select("\x61\56\x2a\x2c\x20\x62\x2e\x6e\141\155\x61\x5f\147\x75\162\x75\x2c\x20\142\x2e\146\x6f\x74\157\54\x20\x63\x2e\x6e\x61\x6d\x61\40\x61\x73\40\156\x61\155\x61\137\x73\x69\x73\167\141\x2c\x20\x63\x2e\x66\x6f\164\157\x20\x61\x73\x20\146\x6f\164\x6f\137\163\x69\x73\x77\x61\x2c\40\50\x53\x45\114\105\x43\x54\40\x43\x4f\125\x4e\124\x28\x70\x6f\163\164\x5f\162\145\x70\x6c\x79\x2e\x69\144\137\x72\x65\x70\x6c\x79\51\40\106\122\117\x4d\40\160\x6f\163\164\137\162\x65\160\x6c\x79\x20\x57\x48\105\122\x45\x20\x61\x2e\x69\x64\x5f\x63\157\155\155\x65\x6e\x74\x20\75\x20\x70\157\x73\164\x5f\162\145\x70\154\171\x2e\151\x64\x5f\x63\157\x6d\155\x65\156\x74\x29\40\101\123\x20\152\155\154"); goto kHMaH; nYBhg: $perPage = 5; goto uCLHy; xDERC: $comment = $this->db->get()->result(); goto Hx3Bz; HXKHt: $this->db->order_by("\141\x2e\x74\x61\156\147\147\x61\x6c", "\144\x65\x73\x63"); goto aCqmQ; b_ihA: $this->db->join("\155\x61\x73\164\145\162\137\147\165\162\x75\x20\x62", "\x61\x2e\144\x61\162\x69\75\142\56\151\x64\137\147\x75\x72\165", "\x6c\145\x66\164"); goto MPu_y; uCLHy: $offset = $page * $perPage; goto Uyl4U; ObWRX: } public function getReplies($id_comment, $page) { goto l8Ycj; l8Ycj: $perPage = 5; goto V3th5; mEdc4: $this->output_json($replies); goto TJtDj; Ad2Ri: $this->db->where("\141\56\151\x64\137\143\x6f\155\155\x65\156\x74", $id_comment); goto pOt0E; VBCjf: $this->db->select("\141\56\x2a\54\x20\142\x2e\x6e\141\155\x61\x5f\147\x75\162\x75\54\40\142\x2e\x66\x6f\164\157\x2c\x20\x63\56\x6e\x61\x6d\x61\x20\141\x73\40\x6e\141\155\141\137\x73\151\163\167\141\x2c\x20\143\56\146\157\164\157\x20\x61\x73\x20\146\x6f\x74\x6f\137\x73\151\163\x77\141"); goto IJIEt; V3th5: $offset = $page * $perPage; goto BUHpJ; AIU5x: $this->db->order_by("\141\x2e\164\x61\156\147\x67\141\154", "\x64\x65\163\143"); goto Ad2Ri; iFl2a: $replies = $this->db->get()->result(); goto mEdc4; BUHpJ: $this->db->query("\123\105\124\40\x53\x51\x4c\x5f\102\111\x47\137\123\x45\114\105\103\124\123\75\x31"); goto VBCjf; uPw3c: $this->db->join("\x6d\x61\163\164\x65\162\137\x67\x75\x72\165\x20\x62", "\x61\56\144\141\162\151\75\142\56\x69\144\x5f\147\165\162\x75", "\154\145\x66\164"); goto Mw1Fn; Mw1Fn: $this->db->join("\x6d\x61\x73\x74\x65\162\x5f\x73\151\163\x77\x61\40\143", "\141\56\x64\x61\162\x69\x3d\143\56\151\144\137\163\x69\x73\167\x61", "\154\x65\x66\164"); goto AIU5x; IJIEt: $this->db->from("\x70\157\163\x74\x5f\x72\x65\x70\154\x79\x20\141"); goto uPw3c; pOt0E: $this->db->limit($perPage, $offset); goto iFl2a; TJtDj: } public function save() { goto DNCPY; DNCPY: $kepada = json_decode(json_encode($this->input->post("\153\x65\x70\141\x64\x61\133\x5d", true))); goto EuPZw; EuPZw: $dari = $this->input->post("\144\141\162\151"); goto se4Sd; ohlrX: $this->output_json($insert); goto O7wp1; c6E_6: $insert = $this->db->replace("\x70\157\x73\x74", $data); goto ohlrX; se4Sd: $data = ["\x6b\145\160\141\144\x61" => serialize($kepada), "\x64\x61\162\151" => $dari, "\144\x61\x72\x69\137\x67\162\x6f\165\160" => $dari == "\x30" ? "\61" : "\62", "\x74\145\170\x74" => $this->input->post("\x74\145\170\x74")]; goto c6E_6; O7wp1: } public function saveKomentar() { goto C5F_u; Ld2Vn: $data = ["\151\x64\x5f\x70\157\x73\164" => $this->input->post("\151\x64\137\160\x6f\x73\x74"), "\144\141\x72\151" => $dari, "\x64\141\162\151\x5f\147\162\x6f\x75\x70" => $dari_group, "\x74\145\170\164" => $this->input->post("\164\145\170\164")]; goto Pp_7L; EDScj: $this->db->select("\x61\x2e\x2a\x2c\x20\x62\56\x6e\x61\155\141\137\x67\165\x72\165\x2c\x20\142\56\146\157\x74\x6f\54\x20\x63\x2e\x6e\x61\155\x61\x20\141\x73\40\x6e\x61\x6d\141\x5f\x73\x69\x73\167\x61\x2c\x20\143\56\x66\157\164\157\x20\x61\x73\x20\146\157\164\x6f\x5f\163\x69\163\167\141\x2c\x20\50\x53\x45\x4c\105\103\x54\40\103\x4f\x55\116\x54\x28\160\157\x73\164\137\162\x65\160\154\x79\56\151\144\137\162\145\160\154\171\51\40\106\122\117\x4d\40\x70\x6f\x73\164\x5f\162\x65\160\x6c\x79\40\x57\110\105\x52\x45\40\x61\x2e\x69\x64\x5f\x63\157\155\155\x65\156\164\40\75\x20\x70\x6f\163\x74\x5f\162\x65\160\154\x79\56\151\x64\137\143\x6f\x6d\155\x65\x6e\164\x29\x20\101\123\40\152\155\154"); goto nusMx; caYpC: $user = $this->ion_auth->user()->row(); goto JzXaq; dDL2_: if ($this->ion_auth->is_admin()) { goto gvjlj; } goto caYpC; pPrUS: $smt = $this->master->getSemesterActive(); goto d2DaT; C5F_u: $dari = "\x30"; goto E8XLP; HpF9f: gvjlj: goto Ld2Vn; Nobc2: $this->db->query("\x53\105\124\x20\123\121\x4c\x5f\102\x49\107\137\123\105\114\x45\103\124\123\x3d\61"); goto EDScj; JzXaq: $tp = $this->master->getTahunActive(); goto pPrUS; E8XLP: $dari_group = 1; goto dDL2_; hval5: $id = $this->db->insert_id(); goto Nobc2; Pp_7L: $insert = $this->db->replace("\x70\x6f\163\164\137\143\x6f\155\155\x65\x6e\x74\x73", $data); goto hval5; RyPJI: $this->output_json($comment); goto wMIa7; nusMx: $this->db->from("\x70\x6f\x73\x74\x5f\x63\x6f\155\x6d\145\x6e\164\x73\40\141"); goto sNHm8; CGCWJ: $this->db->order_by("\x61\x2e\x74\141\156\147\x67\141\x6c", "\144\x65\163\x63"); goto Cfb_t; pGtEO: $comment = $this->db->get()->result(); goto RyPJI; VP3RW: $this->db->join("\x6d\x61\163\164\145\162\x5f\x73\151\163\x77\x61\x20\143", "\141\x2e\x64\141\x72\151\x3d\143\56\151\x64\x5f\x73\x69\163\167\x61", "\154\145\146\x74"); goto CGCWJ; Cfb_t: $this->db->where("\141\56\x69\x64\137\x63\157\155\x6d\x65\x6e\164", $id); goto pGtEO; pl38I: $dari = $guru->id_guru; goto H3yt_; d2DaT: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto pl38I; sNHm8: $this->db->join("\x6d\x61\x73\x74\x65\162\137\x67\165\162\x75\40\142", "\x61\56\x64\x61\x72\x69\x3d\x62\56\x69\144\137\147\165\x72\165", "\154\x65\146\164"); goto VP3RW; H3yt_: $dari_group = 2; goto HpF9f; wMIa7: } public function saveBalasan() { goto qBQc9; s8EmI: $dari_group = 1; goto B2z0N; WELKP: $insert = $this->db->replace("\x70\157\163\x74\x5f\162\x65\160\154\x79", $data); goto xym45; HkkXD: $replies = $this->db->get()->result(); goto FTll6; L_7Ck: $this->db->join("\155\x61\x73\x74\145\162\137\163\151\163\167\141\40\x63", "\141\56\x64\141\162\151\75\x63\56\x69\144\137\163\151\x73\167\141", "\x6c\145\x66\164"); goto tLAz0; ky3kN: $smt = $this->master->getSemesterActive(); goto QG7Eb; IKt48: $this->db->where("\141\x2e\151\x64\x5f\162\145\x70\154\171", $id); goto HkkXD; NOVwP: $this->db->select("\141\x2e\x2a\x2c\40\142\x2e\x6e\141\155\x61\x5f\147\165\162\x75\54\40\142\56\x66\x6f\x74\157\54\x20\143\x2e\x6e\141\x6d\x61\40\x61\163\x20\x6e\x61\x6d\x61\137\x73\x69\x73\167\x61\54\x20\x63\x2e\x66\157\164\x6f\x20\141\163\40\146\x6f\x74\157\x5f\x73\x69\x73\x77\141"); goto CSJNR; cnN8_: $this->db->join("\155\x61\x73\164\x65\162\x5f\147\165\x72\x75\40\142", "\141\x2e\144\141\162\151\x3d\142\56\151\144\x5f\x67\x75\x72\165", "\x6c\x65\146\x74"); goto L_7Ck; FTll6: $this->output_json($replies); goto zuR8t; IHufW: $user = $this->ion_auth->user()->row(); goto nGcKu; OZQoy: $dari_group = 2; goto VBu0E; xym45: $id = $this->db->insert_id(); goto GF2UM; VBu0E: U7lVT: goto Z0fwR; MYvh7: $dari = $guru->id_guru; goto OZQoy; CSJNR: $this->db->from("\x70\x6f\x73\164\x5f\x72\x65\160\154\171\40\x61"); goto cnN8_; Z0fwR: $data = ["\x69\144\x5f\x63\x6f\155\x6d\x65\x6e\x74" => $this->input->post("\151\144\x5f\143\157\155\155\x65\156\164"), "\x64\x61\162\151" => $dari, "\144\141\162\151\x5f\147\162\x6f\x75\x70" => $dari_group, "\x74\x65\x78\164" => $this->input->post("\x74\x65\x78\x74")]; goto WELKP; tLAz0: $this->db->order_by("\x61\x2e\x74\x61\156\x67\x67\x61\x6c", "\x64\145\163\x63"); goto IKt48; nGcKu: $tp = $this->master->getTahunActive(); goto ky3kN; QG7Eb: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto MYvh7; qBQc9: $dari = "\60"; goto s8EmI; B2z0N: if ($this->ion_auth->is_admin()) { goto U7lVT; } goto IHufW; GF2UM: $this->db->query("\123\105\124\x20\123\121\114\x5f\x42\x49\107\137\123\x45\x4c\x45\x43\124\123\x3d\x31"); goto NOVwP; zuR8t: } public function hapusPost($id_post) { goto gcp9r; HaRFf: foreach ($comments as $comment) { goto j0aok; eurTX: P5NTN: goto lNUpE; jLvVp: $deleted["\x62\x61\154\x61\163\141\156"] = $this->db->delete("\x70\157\163\x74\x5f\162\x65\160\154\171"); goto eurTX; j0aok: $this->db->where("\x69\x64\x5f\x63\157\x6d\155\145\x6e\164", $comment->id_comment); goto jLvVp; lNUpE: } goto swuH1; XJbY0: if (!$this->db->delete("\160\x6f\x73\164\x5f\x63\x6f\155\155\x65\156\164\x73")) { goto WIrKa; } goto GcwwZ; O1ROq: WIrKa: goto qK4nh; XJN04: $comments = $this->post->getIdComments($id_post); goto HaRFf; qK4nh: $this->db->trans_complete(); goto v3u3Q; YXydJ: $deleted = $this->db->delete("\160\157\x73\164"); goto O1ROq; v3u3Q: $this->output_json($deleted); goto jduXH; B14xr: $this->db->where("\x69\144\x5f\x70\157\x73\164", $id_post); goto XJbY0; GcwwZ: $this->db->where("\x69\144\x5f\x70\x6f\163\164", $id_post); goto YXydJ; swuH1: D3X4s: goto B14xr; gcp9r: $this->db->trans_start(); goto XJN04; jduXH: } public function hapusKomentar($id_comment) { goto b_gGD; QXY3w: $this->output_json($deleted); goto hCxF3; EzhBv: $this->db->trans_complete(); goto QXY3w; azKiT: $this->db->where("\151\x64\137\x63\x6f\x6d\155\145\156\x74", $id_comment); goto QdKnr; QdKnr: $deleted["\x6b\x6f\x6d\145\156\x74\x61\x72"] = $this->db->delete("\x70\157\x73\x74\x5f\143\x6f\x6d\155\145\156\164\163"); goto pUtjS; b_gGD: $this->db->trans_start(); goto azKiT; cEEv4: $deleted["\142\141\x6c\141\163\141\x6e"] = $this->db->delete("\160\x6f\163\x74\x5f\162\x65\160\x6c\x79"); goto EzhBv; pUtjS: $this->db->where("\x69\x64\137\x63\157\155\155\145\156\x74", $id_comment); goto cEEv4; hCxF3: } public function hapusBalasan($id_reply) { goto itv23; JUCAQ: $this->db->where("\x69\144\x5f\x72\145\160\154\171", $id_reply); goto AtD9M; OW08m: $this->output_json($deleted); goto WG70J; itv23: $this->db->trans_start(); goto JUCAQ; AtD9M: $deleted["\142\x61\x6c\141\163\141\x6e"] = $this->db->delete("\x70\x6f\x73\x74\137\x72\145\160\154\x79"); goto a1_vA; a1_vA: $this->db->trans_complete(); goto OW08m; WG70J: } public function getRunningText() { $data["\162\x75\156\x6e\x69\x6e\x67\137\164\145\x78\x74"] = $this->dashboard->getRunningText(); $this->output_json($data); } public function saveRunningText() { goto YGmYs; Myopd: HpDoS: goto oJ7B1; oJ7B1: $data["\x73\x74\x61\164\x75\163"] = $updates; goto X0X_j; meefC: $updates = []; goto zX6dv; X0X_j: $this->output_json($data); goto xWYKE; zX6dv: foreach ($input as $d) { goto m7Dws; aLUAt: array_push($updates, $update); goto sQfLU; m7Dws: $data = ["\151\144\x5f\x74\145\x78\x74" => $d->id_text, "\164\145\x78\164" => $d->text]; goto HVAA5; sQfLU: fwlZA: goto N_u1v; HVAA5: $update = $this->db->replace("\x72\x75\x6e\x6e\151\156\x67\x5f\164\x65\170\164", $data); goto aLUAt; N_u1v: } goto Myopd; YGmYs: $input = json_decode($this->input->post("\164\145\x78\x74", true)); goto meefC; xWYKE: } public function hapusRunningText($id) { goto TFD0E; qcSgG: $this->output_json($deleted); goto lF5FP; kudiv: $deleted = $this->db->delete("\162\165\156\156\151\156\x67\x5f\x74\145\x78\x74"); goto qcSgG; TFD0E: $this->db->where("\151\x64\137\164\145\170\164", $id); goto kudiv; lF5FP: } }
