<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Kelasabsensiharian extends CI_Controller { public function __construct() { goto KpTAO; RfkNE: K5aKS: goto gLVAW; hK1yq: sGj30: goto E3BJf; YL_ca: goto K5aKS; goto hK1yq; E3BJf: redirect("\141\165\x74\150"); goto RfkNE; UJtKZ: $this->load->model("\x44\162\x6f\x70\x64\x6f\x77\x6e\x5f\155\x6f\x64\145\x6c", "\144\x72\x6f\x70\144\x6f\167\x6e"); goto KzN7J; Qf_w1: $this->load->model("\115\x61\163\164\x65\x72\137\x6d\x6f\144\x65\x6c", "\155\x61\x73\x74\145\x72"); goto khag1; zCtCG: qnKJr: goto YL_ca; Onurh: $this->form_validation->set_error_delimiters('', ''); goto mAX3W; KpTAO: parent::__construct(); goto PqWSe; ouBZY: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\x75\x72\165"))) { goto qnKJr; } goto sVLlF; sVLlF: show_error("\x48\141\x6e\171\141\40\101\x64\155\151\x6e\x69\x73\x74\162\141\164\157\162\40\x79\141\x6e\147\40\x64\151\142\145\x72\x69\x20\150\x61\x6b\x20\165\156\x74\x75\x6b\x20\x6d\x65\156\x67\141\x6b\x73\x65\163\40\150\x61\154\x61\155\141\156\40\x69\156\151\x2c\x20\x3c\141\40\150\x72\145\146\75\x22" . base_url("\144\x61\163\150\x62\157\x61\162\x64") . "\42\76\x4b\x65\x6d\x62\x61\154\x69\40\153\x65\40\155\145\156\x75\x20\x61\167\x61\154\x3c\57\141\76", 403, "\101\x6b\x73\x65\x73\x20\124\145\162\x6c\141\162\141\156\x67"); goto zCtCG; KzN7J: $this->load->model("\x4b\x65\154\x61\163\x5f\x6d\x6f\144\145\x6c", "\x6b\145\x6c\141\163"); goto Onurh; gLVAW: $this->load->library(["\144\x61\164\141\x74\141\142\154\x65\163", "\x66\157\162\155\x5f\x76\141\154\x69\x64\x61\x74\x69\x6f\156"]); goto Qf_w1; khag1: $this->load->model("\104\141\x73\x68\x62\x6f\141\x72\144\x5f\x6d\x6f\144\x65\x6c", "\144\141\163\x68\x62\157\141\162\144"); goto UJtKZ; PqWSe: if (!$this->ion_auth->logged_in()) { goto sGj30; } goto ouBZY; mAX3W: } public function output_json($data, $encode = true) { goto XsHME; Sy3mv: YXE5m: goto ycUFh; hGLIp: $data = json_encode($data); goto Sy3mv; ycUFh: $this->output->set_content_type("\x61\160\x70\x6c\151\143\x61\164\x69\157\x6e\57\152\x73\157\156")->set_output($data); goto fmzN8; XsHME: if (!$encode) { goto YXE5m; } goto hGLIp; fmzN8: } public function index() { goto pLDMJ; Lfec_: $data["\160\162\157\146\x69\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto hPRkP; OuVnO: $this->load->view("\x6b\145\154\141\163\57\x61\142\163\x65\156\150\141\162\x69\141\x6e\x2f\x64\x61\164\x61"); goto pc0TF; x1v1O: $data["\x69\144\137\147\x75\x72\165"] = $guru->id_guru; goto WhRBe; pc0TF: $this->load->view("\137\164\145\155\x70\154\x61\x74\x65\x73\57\x64\141\163\x68\142\157\x61\x72\144\x2f\137\x66\157\x6f\x74\x65\x72"); goto Ofcas; Ofcas: TFL5L: goto rLrZ0; wz7Qt: $data = ["\x75\163\x65\162" => $user, "\152\x75\x64\165\x6c" => "\113\145\150\x61\144\162\151\141\156\x20\110\141\x72\151\x61\x6e\x20\x53\151\x73\x77\x61", "\163\x75\x62\x6a\x75\144\x75\x6c" => "\x44\141\x74\141\40\113\145\150\x61\144\151\162\x61\x6e\x20\x53\151\x73\x77\141", "\x73\145\164\x74\x69\x6e\147" => $this->dashboard->getSetting()]; goto p3ThQ; AAANm: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto JxGp3; jhOWk: $data["\x73\155\x74\137\x61\143\x74\x69\x76\145"] = $smt; goto J628Z; b2EoW: goto TFL5L; goto sWjO_; pLDMJ: $user = $this->ion_auth->user()->row(); goto wz7Qt; Dwei3: $data["\x73\155\x74"] = $this->dashboard->getSemester(); goto jhOWk; MCtbb: $data["\x74\160"] = $this->dashboard->getTahun(); goto H4sG_; GfguY: $this->load->view("\x6d\x65\x6d\x62\x65\x72\x73\x2f\x67\x75\x72\165\57\x74\x65\155\160\x6c\x61\164\145\x73\x2f\x66\157\x6f\x74\145\x72"); goto b2EoW; J628Z: $data["\153\x65\x6c\141\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto bhqBB; vc5AJ: $data["\x67\165\162\x75"] = $guru; goto x1v1O; AgqCS: $this->load->view("\137\x74\x65\x6d\x70\154\x61\164\145\x73\x2f\x64\141\x73\150\x62\157\x61\162\144\57\x5f\150\145\141\144\145\162", $data); goto OuVnO; YLbiZ: $this->load->view("\153\x65\154\x61\163\57\x61\142\x73\x65\x6e\x68\141\x72\151\141\156\57\144\x61\x74\x61"); goto GfguY; bhqBB: $data["\155\141\x70\x65\154"] = $this->dropdown->getAllMapel(); goto Lhd7c; WhRBe: $this->load->view("\155\x65\x6d\x62\x65\x72\x73\x2f\147\x75\162\x75\x2f\164\145\155\x70\x6c\x61\164\x65\x73\57\x68\145\x61\x64\145\x72", $data); goto YLbiZ; H4sG_: $data["\164\160\x5f\141\143\x74\x69\x76\x65"] = $tp; goto Dwei3; l723o: $smt = $this->master->getSemesterActive(); goto MCtbb; Lhd7c: if ($this->ion_auth->is_admin()) { goto PCNVO; } goto AAANm; p3ThQ: $tp = $this->master->getTahunActive(); goto l723o; sWjO_: PCNVO: goto Lfec_; JxGp3: $nguru[$guru->id_guru] = $guru->nama_guru; goto vc5AJ; hPRkP: $data["\147\x75\x72\x75"] = $this->dropdown->getAllGuru(); goto AgqCS; rLrZ0: } public function loadAbsensi() { goto qh7_L; CPBwU: gUSvq: goto UuSM2; zyARo: $bulan = str_pad($bulan, 2, "\60", STR_PAD_LEFT); goto hUCgx; uYBcJ: uaYLM: goto A99mB; Mq0rG: $arrIdKjm = []; goto UkjAa; o4JzU: $arrIdMapel = []; goto PFNBR; ZMlxI: if (!($info != null)) { goto TO40P; } goto jqXIH; ZwLn4: $bulan = $this->input->post("\x62\x6c\156", true); goto b5GcX; VPqUt: $jadwal_materi = []; goto kfHXw; A99mB: $jadwal = $this->dashboard->loadJadwalHariIni($id_tp, $id_smt, $id_kelas, $hari); goto o4JzU; pCSus: goto uaYLM; goto OfKwn; kfHXw: if (!(count($arrIdMapel) > 0)) { goto ANPoi; } goto rPCuj; rPCuj: $jadwal_materi = $this->kelas->getAllMateriByTgl($id_kelas, $tahun . "\x2d" . $bulan . "\55" . $tanggal, $arrIdMapel); goto vagWn; Xy8JS: $this->output_json(array("\164\145\x73\x74" => [$id_kelas, $tahun . "\x2d" . $bulan . "\55" . $tanggal, $arrIdMapel], "\x6c\157\147" => $log, "\151\156\x66\x6f" => $info, "\x6a\x61\x64\167\x61\154" => $jadwal, "\155\141\164\145\162\x69" => $jadwal_materi, "\x69\x73\x74\151\162\141\x68\141\x74" => $istirahat)); goto Q1MGX; jqXIH: foreach ($siswa as $s) { goto q7XPC; ro023: $log[$s->id_siswa] = ["\156\x61\x6d\141" => $s->nama, "\156\x69\x73" => $s->nis, "\153\145\154\141\163" => $s->nama_kelas, "\x73\x74\x61\164\x75\163" => $status]; goto bZhly; lqHro: if (!(count($arrIdKjm) > 0)) { goto RYdPJ; } goto ZZuDM; mJy5p: $status = []; goto BNpoY; bZhly: sdx1q: goto uxkwY; PJipG: BzPXx: goto ro023; BNpoY: foreach ($status_materi as $stat) { $status[$stat->jam_ke][$stat->id_mapel][$stat->jenis] = $stat; wVfUO: } goto PJipG; q7XPC: $status_materi = []; goto lqHro; ZZuDM: $status_materi = $this->kelas->getRekapStatusMateri($s->id_siswa, $arrIdKjm); goto ADb2K; ADb2K: RYdPJ: goto mJy5p; uxkwY: } goto ZGYZm; ib00s: if ($info != null) { goto eyhQY; } goto RBYGz; UuSM2: $siswa = $this->kelas->getKelasSiswa($id_kelas, $id_tp, $id_smt); goto pyylj; t4liO: $istirahat = unserialize($info->istirahat); goto uYBcJ; hUCgx: $tanggal = str_pad($tanggal, 2, "\x30", STR_PAD_LEFT); goto s9G_L; vagWn: ANPoi: goto Mq0rG; ITikT: $hari = $this->input->post("\x68\x61\x72\x69", true); goto jLrNS; b5GcX: $tanggal = $this->input->post("\164\x67\x6c", true); goto ITikT; pyylj: $log = []; goto ZMlxI; qh7_L: $id_kelas = $this->input->post("\x6b\x65\x6c\x61\163", true); goto t8j2t; UkjAa: foreach ($jadwal_materi as $jmtr) { goto ZdASm; ZdASm: foreach ($jmtr as $jam) { goto yWyGl; EH4wI: WLBDZ: goto yaHP4; dzgVy: JSD03: goto EH4wI; yWyGl: foreach ($jam as $jns) { array_push($arrIdKjm, $jns->id_kjm); X3LAR: } goto dzgVy; yaHP4: } goto v29uj; v29uj: sXxU6: goto YP_qu; YP_qu: GgIx9: goto xHyjw; xHyjw: } goto CPBwU; jLrNS: $id_tp = $this->master->getTahunActive()->id_tp; goto qEaPN; RBYGz: $istirahat = []; goto pCSus; s9G_L: $info = $this->dashboard->getJadwalKbm($id_tp, $id_smt, $id_kelas); goto ib00s; ZGYZm: VAfPa: goto f2Dg5; t8j2t: $tahun = $this->input->post("\164\150\156", true); goto ZwLn4; f2Dg5: TO40P: goto Xy8JS; PFNBR: foreach ($jadwal as $jd) { array_push($arrIdMapel, $jd->id_mapel); bko57: } goto KR4Ui; qEaPN: $id_smt = $this->master->getSemesterActive()->id_smt; goto zyARo; KR4Ui: gZnqU: goto VPqUt; OfKwn: eyhQY: goto t4liO; Q1MGX: } }
