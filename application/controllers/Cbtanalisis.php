<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtanalisis extends CI_Controller { public function __construct() { goto WwDCg; W1p_j: $this->load->model("\x4c\x6f\x67\x5f\155\x6f\x64\145\154", "\154\x6f\x67\147\151\x6e\x67"); goto QjC2I; TmRzt: $this->form_validation->set_error_delimiters('', ''); goto uCHEV; xYGKm: $this->load->model("\103\x62\164\137\155\x6f\x64\145\x6c", "\x63\142\164"); goto W1p_j; W1DFY: $this->load->model("\x4d\141\x73\164\x65\162\137\155\157\x64\145\x6c", "\x6d\x61\163\x74\x65\162"); goto PDdqD; nfm_Q: if (!$this->ion_auth->logged_in()) { goto j865D; } goto hnWVT; r5N3p: goto hI3Gn; goto BYYiD; UTuZS: redirect("\x61\165\164\150"); goto LwXwz; Qv3YS: lnInK: goto r5N3p; WwDCg: parent::__construct(); goto nfm_Q; dhtfL: $this->load->library(["\x64\141\x74\x61\x74\141\142\x6c\x65\x73", "\x66\157\162\x6d\137\166\x61\154\x69\144\141\x74\x69\157\156"]); goto W1DFY; hnWVT: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\x75\162\165"))) { goto lnInK; } goto BNAsH; QjC2I: $this->load->model("\x44\162\157\x70\144\x6f\x77\x6e\x5f\x6d\157\144\145\154", "\144\162\x6f\x70\x64\157\167\156"); goto TmRzt; BNAsH: show_error("\110\141\x6e\x79\x61\x20\101\144\155\151\156\151\163\164\162\x61\164\x6f\162\40\x79\x61\x6e\x67\40\144\x69\x62\x65\162\x69\40\150\x61\x6b\40\165\x6e\x74\x75\153\40\155\x65\x6e\x67\141\x6b\163\145\163\x20\x68\x61\154\141\155\141\x6e\x20\x69\156\x69\54\40\74\141\40\150\x72\x65\146\x3d\42" . base_url("\x64\141\x73\150\142\157\141\x72\x64") . "\x22\x3e\113\145\155\142\x61\154\x69\x20\x6b\145\x20\155\x65\156\165\x20\141\167\x61\154\x3c\57\141\76", 403, "\x41\x6b\163\145\x73\40\124\x65\x72\154\141\162\141\156\147"); goto Qv3YS; PDdqD: $this->load->model("\x44\x61\163\x68\142\157\x61\x72\144\137\155\157\x64\x65\154", "\x64\x61\x73\150\142\157\141\x72\x64"); goto xYGKm; BYYiD: j865D: goto UTuZS; LwXwz: hI3Gn: goto dhtfL; uCHEV: } public function output_json($data, $encode = true) { goto zBSq0; W9Otz: $this->output->set_content_type("\x61\160\x70\x6c\x69\x63\141\x74\151\157\x6e\x2f\152\163\157\x6e")->set_output($data); goto DSOGF; AVmHH: hOYt_: goto W9Otz; vHfBA: $data = json_encode($data); goto AVmHH; zBSq0: if (!$encode) { goto hOYt_; } goto vHfBA; DSOGF: } public function index() { goto zSWRs; zC0Cd: $thn_sel = $this->input->get("\x74\x68\156"); goto k06S9; ihiBp: $this->load->view("\x6d\145\x6d\x62\145\162\x73\x2f\x67\x75\162\165\x2f\x74\x65\155\160\x6c\141\164\x65\163\57\x68\145\x61\x64\x65\162", $data); goto k0wz4; U4OXQ: $this->load->view("\155\x65\155\x62\145\162\x73\x2f\147\x75\x72\165\57\164\145\x6d\x70\x6c\x61\164\145\x73\x2f\146\x6f\x6f\164\x65\x72"); goto kOjys; Ik0IG: $data["\x70\x72\157\x66\x69\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto N0lcN; asoyC: mh1vY: goto Ik0IG; Twt5g: if ($this->ion_auth->is_admin()) { goto mh1vY; } goto dGNV_; xV0ee: WVTOP: goto B34Yu; N0lcN: $data["\153\157\x64\x65\152\141\144\167\141\154"] = $this->dropdown->getAllJadwal($thn_sel, $smt_sel); goto G1RdI; lYebm: $data = ["\165\163\x65\162" => $user, "\x6a\x75\144\x75\x6c" => "\101\x6e\x61\x6c\151\163\x61\40\123\157\141\154", "\x73\165\x62\152\165\x64\165\154" => "\101\156\x61\x6c\151\x73\x61\40\123\157\x61\154\x20\125\x6a\151\141\156", "\x73\145\164\164\x69\x6e\x67" => $this->dashboard->getSetting()]; goto QUqql; Cr_92: $jadwal = $this->input->get("\152\141\144\x77\141\154"); goto zC0Cd; zvU3B: $smt_sel = $smt_sel == null ? $smt->id_smt : $smt_sel; goto rr6Ic; hDnel: $jawabans_siswa = []; goto VF8xm; kvohX: $data["\x6a\141\x64\x77\x61\154\137\x73\145\154\x65\143\164\x65\144"] = $jadwal; goto VPmc5; AtIfo: $data["\x73\x6d\164\137\163\x65\154\x65\x63\164\145\144"] = $smt_sel; goto kvohX; rr6Ic: $data["\164\x70\x5f\163\145\x6c\x65\x63\x74\145\x64"] = $thn_sel; goto AtIfo; k0wz4: $this->load->view("\x63\x62\x74\57\141\x6e\x61\154\x69\x73\x69\x73\57\144\141\164\x61"); goto U4OXQ; yD8Vb: $data["\153\157\x64\145\152\x61\144\167\x61\154"] = $this->dropdown->getAllJadwalGuru($thn_sel, $smt_sel, $guru->id_guru); goto ihiBp; k06S9: $smt_sel = $this->input->get("\163\155\x74"); goto Q0nKW; QUqql: $tp = $this->dashboard->getTahunActive(); goto ySz3T; kNwMP: LnnPI: goto kQWGf; VF8xm: $ids = []; goto OiwUc; g_8Dt: $nguru[$guru->id_guru] = $guru->nama_guru; goto tpEWM; Q0nKW: $thn_sel = $thn_sel == null ? $tp->id_tp : $thn_sel; goto zvU3B; OiwUc: foreach ($all_jawaban as $jawaban_siswa) { goto e9_Za; OzCC2: $jawabans_siswa[$jawaban_siswa->jenis_soal][$jawaban_siswa->nomor_soal][$jawaban_siswa->id_siswa] = $jawaban_siswa->jawaban_siswa; goto q7zuZ; q7zuZ: zmYFi: goto zyFO2; e9_Za: array_push($ids, $jawaban_siswa->id_siswa); goto OzCC2; zyFO2: } goto YnETA; ow4lH: if (!isset($all_soals[1])) { goto E85q6; } goto Ru16g; qn9CZ: $this->load->view("\x63\x62\164\x2f\141\x6e\x61\x6c\x69\x73\151\163\57\x64\x61\164\x61"); goto HON1o; Z1xa0: $data["\156\x69\x6c\141\x69"] = $nilai_pg; goto Bq4W3; x26Tj: $all_soals = $this->cbt->getSoalByBank($info->id_bank); goto ow4lH; uT80R: $data["\x74\x70"] = $this->dashboard->getTahun(); goto BkYzn; Bq4W3: omK3y: goto Twt5g; B82UM: $data["\x69\x6e\x66\x6f"] = $info; goto vTqHw; vTqHw: $data["\163\157\141\x6c\x73"] = $all_soals; goto Z1xa0; zSWRs: $user = $this->ion_auth->user()->row(); goto lYebm; c1xq0: $all_jawaban = $this->cbt->getJawabanByBank($info->id_bank); goto hDnel; ZWHiJ: $data["\163\x6d\x74"] = $this->dashboard->getSemester(); goto FVbTG; ySz3T: $smt = $this->dashboard->getSemesterActive(); goto uT80R; tpEWM: $data["\147\165\x72\x75"] = $guru; goto yD8Vb; YnETA: t2bf7: goto N_PH3; dGNV_: $guru = $this->dashboard->getDataGuruByUserId($user->id, $thn_sel, $smt_sel); goto g_8Dt; G1RdI: $this->load->view("\137\164\145\x6d\160\154\x61\164\145\163\57\x64\141\163\x68\x62\157\x61\162\144\57\137\x68\145\x61\144\x65\162", $data); goto qn9CZ; FVbTG: $data["\x73\155\164\x5f\x61\x63\164\x69\x76\145"] = $smt; goto Cr_92; VPmc5: if (!($jadwal != null)) { goto omK3y; } goto pzGTT; kOjys: goto LnnPI; goto asoyC; pzGTT: $info = $this->cbt->getJadwalById($jadwal); goto c1xq0; B34Yu: E85q6: goto B82UM; HON1o: $this->load->view("\x5f\x74\x65\x6d\x70\154\141\164\145\163\57\x64\x61\163\150\x62\157\141\162\x64\x2f\137\146\x6f\x6f\164\x65\x72"); goto kNwMP; Ru16g: foreach ($all_soals[1] as $no => $soal) { goto OvyZC; txt4y: uWH2o: goto qeCIQ; xMb5e: TRMNN: goto csRa5; fyyHg: $status_soal = "\163\145\144\x61\x6e\147"; goto BB20U; nz1nu: foreach ($nilai_pg as $id => $nilai) { goto y3NBN; SRSP_: goto Y4KtY; goto CTchn; y3NBN: array_push($y, $nilai->pg_benar); goto VXpRg; CTchn: QX7DP: goto tPh7P; KHIY6: $no++; goto kL90k; OOCOH: $yng_benar_golonganbawah++; goto i_BYu; jrklU: Do6Lz: goto KHIY6; fijAM: if ($no <= $bagi) { goto QX7DP; } goto OLTEK; tPh7P: if (!($siswa_menjawab == $soal->jawaban)) { goto bw8cK; } goto KRKzQ; xo29L: bw8cK: goto wCOP4; KRKzQ: $yng_benar_golonganatas++; goto xo29L; VXpRg: if (!isset($jwbn_siswa[$id])) { goto Do6Lz; } goto OKXj_; OKXj_: $siswa_menjawab = $jwbn_siswa[$id]; goto fijAM; kL90k: Waw7f: goto Hxsae; i_BYu: u8rCW: goto SRSP_; wCOP4: Y4KtY: goto jrklU; OLTEK: if (!($siswa_menjawab == $soal->jawaban)) { goto u8rCW; } goto OOCOH; Hxsae: } goto EJgjz; p72XG: $x = []; goto ah3C0; kZ7nI: $soal->status_daya = "\x42\x61\x69\x6b"; goto FboZv; TgHfr: $soal->status_valid = $validitas; goto iXjek; TmC6B: ZzdMS: goto Ju2gQ; I7eG3: goto XjpCV; goto OTUSV; hKMH9: $pearson = $this->pearson($x, $y); goto IzLXw; PfJu5: $jml_siswa--; goto YRZcW; G6e3w: qTnaA: goto YQe92; hIn2C: if (!($jml_siswa > 0)) { goto ZKfzD; } goto GP9RC; Ju2gQ: $daya_pembeda = $yng_benar_golonganatas / $bagi_daya; goto G6e3w; leJf4: $soal->benar_atas = $yng_benar_golonganatas; goto iMZ8G; ah3C0: $jwbn_siswa = isset($jawabans_siswa[1][$no]) && isset($jawabans_siswa[1][$no]) ? $jawabans_siswa[1][$no] : []; goto UO1IP; OTUSV: cmbwH: goto T4JVH; iMZ8G: $soal->benar_bawah = $yng_benar_golonganbawah; goto hKMH9; TM3Tp: bTf3z: goto odr3c; nFhUZ: $pos_a = 0; goto G_Tg3; hbasd: $soal->table_r = $this->nilaiSignifikansi($total_siswa); goto Z3E4s; S8zTx: $soal->skor_siswa = []; goto myXO8; OXC5j: goto Juyjk; goto TM3Tp; uPYGD: $soal->jumlah_salah = 0; goto IYCBh; OvyZC: $soal->jawaban_siswa = []; goto S8zTx; d19MA: $y = []; goto MGPj0; jpjQs: $soal->status_daya = "\x43\165\153\165\160"; goto Ps026; mWCPP: XjpCV: goto PL2d0; jjDk3: goto k9eEI; goto zLHQS; pa0hb: $soal->total_siswa = $total_siswa; goto leJf4; iGhKO: $soal->status_daya = "\112\145\x6c\x65\153"; goto jjDk3; odr3c: $soal->status_daya = "\x42\141\x69\153\x20\x53\145\153\141\154\151"; goto RSw5g; YGL6b: $soal->tingkat_kesukaran = $kesukaran; goto Q30pj; YQe92: goto ZxXC6; goto xMb5e; iXjek: $bagi_daya = $bagi > 0 ? $bagi : 1; goto dLUoD; qeCIQ: $status_soal = "\155\165\144\141\150"; goto riXxz; dLUoD: if ($yng_benar_golonganatas == 0 && $yng_benar_golonganbawah != 0) { goto TRMNN; } goto uQQjq; G3A89: if ($kesukaran >= 0.7) { goto uWH2o; } goto rcZvG; GP9RC: $kesukaran = round($benar / $jml_siswa, 2); goto G3A89; zLHQS: r2hxx: goto jpjQs; nkJac: $benar = $soal->jumlah_benar; goto tUkUx; RSw5g: Juyjk: goto OCCTj; YRZcW: d28fJ: goto qW2yh; qW2yh: $bagi = $jml_siswa / 2; goto nFhUZ; ADbzg: P03No: goto nkJac; Ps026: k9eEI: goto CQbZ8; CQbZ8: goto ZTSPm; goto PnNpA; G_Tg3: $pos_b = $bagi; goto d19MA; Noc17: $cek = $jml_siswa % 2; goto ZFUAI; OCCTj: evH7n: goto YTKc3; rn39c: ZxXC6: goto IhKnS; kVLHv: if ($yng_benar_golonganatas == 0 && $yng_benar_golonganbawah == 0) { goto cmbwH; } goto FPV_r; ZFUAI: if (!($cek == 1)) { goto d28fJ; } goto PfJu5; EcQg3: $status_soal = "\163\x75\x6b\141\162"; goto A0W8t; riXxz: Ky7h_: goto Ezzzn; IzLXw: $soal->nilai_valid = $pearson; goto hbasd; MGPj0: $yng_benar_golonganatas = 0; goto buS2F; UO1IP: foreach ($jwbn_siswa as $id => $jawab_siswa) { goto X5hX0; bgKPm: goto GZetO; goto su3g3; swfaV: goto GZetO; goto XntU7; ScvKS: array_push($x, 1); goto AYI1m; AKs7s: $soal->jawaban_siswa["\x6a\x61\x77\141\142\x5f\145"][$id] = $jawab_siswa; goto PjNlH; zc1Db: $soal->jawaban_siswa["\152\x61\x77\x61\x62\x5f\x64"][$id] = $jawab_siswa; goto omF18; IIpIm: $soal->jawaban_siswa["\x6a\x61\x77\141\x62\x5f\141"][$id] = $jawab_siswa; goto swfaV; omF18: goto GZetO; goto xgCLc; b8ILQ: if ($jawab_siswa == "\104") { goto gqWki; } goto LprJR; m0n2A: goto GZetO; goto p5NJd; wSFim: if ($jawab_siswa == "\x42") { goto GyMcb; } goto c0InA; FGAzf: $soal->jawaban_siswa["\152\x61\x77\x61\142\137\142"][$id] = $jawab_siswa; goto APWmH; LprJR: if ($jawab_siswa == "\105") { goto g3u8r; } goto bgKPm; MskV_: if ($jawab_siswa == $soal->jawaban) { goto p7N4h; } goto fU2ZC; zx8sV: $soal->jawaban_siswa["\x6a\x61\x77\x61\142\137\x63"][$id] = $jawab_siswa; goto m0n2A; feeqg: array_push($x, 0); goto LZ8Oe; IpYBu: p7N4h: goto uxAUx; c0InA: if ($jawab_siswa == "\103") { goto UPcbW; } goto b8ILQ; uxAUx: $soal->jumlah_benar++; goto ScvKS; xgCLc: g3u8r: goto AKs7s; PjNlH: GZetO: goto qxvQq; fU2ZC: $soal->jumlah_salah++; goto feeqg; tIYAP: UPcbW: goto zx8sV; LZ8Oe: goto T8EUJ; goto IpYBu; XntU7: GyMcb: goto FGAzf; su3g3: CMbxS: goto IIpIm; yhnae: if ($jawab_siswa == "\x41") { goto CMbxS; } goto wSFim; X5hX0: $total_siswa++; goto MskV_; p5NJd: gqWki: goto zc1Db; AYI1m: T8EUJ: goto yhnae; APWmH: goto GZetO; goto tIYAP; qxvQq: HUvRj: goto Tthnw; Tthnw: } goto ADbzg; A0W8t: goto dboAm; goto pktgu; IYCBh: $total_siswa = 0; goto p72XG; xL2Wh: if ($daya_pembeda >= 0.4) { goto eATTY; } goto x1rTx; IhKnS: $soal->daya_pembeda = $daya_pembeda; goto QLIA1; QLIA1: if ($daya_pembeda >= 0.7) { goto bTf3z; } goto xL2Wh; JtlpX: $no = 1; goto nz1nu; csRa5: $daya_pembeda = 0 - $yng_benar_golonganbawah / $bagi_daya; goto rn39c; q8gOx: $jml_siswa = $total_siswa; goto dWXGW; x1rTx: if ($daya_pembeda >= 0.2) { goto r2hxx; } goto iGhKO; oSFCl: goto Ky7h_; goto txt4y; FboZv: ZTSPm: goto OXC5j; T4JVH: $daya_pembeda = 0; goto mWCPP; EJgjz: KDXRX: goto pa0hb; uQQjq: if ($yng_benar_golonganatas != 0 && $yng_benar_golonganbawah == 0) { goto ZzdMS; } goto kVLHv; PL2d0: goto qTnaA; goto TmC6B; Z3E4s: $validitas = $this->nilaiSignifikansi($total_siswa) <= $pearson ? "\x56\141\154\151\144" : "\124\151\144\x61\153\40\166\x61\154\151\x64"; goto TgHfr; pktgu: jt0U6: goto fyyHg; zdvOh: $status_soal = ''; goto hIn2C; rcZvG: if ($kesukaran >= 0.3) { goto jt0U6; } goto EcQg3; tUkUx: $salah = $soal->jumlah_salah; goto q8gOx; myXO8: $soal->jumlah_benar = 0; goto uPYGD; dWXGW: $kesukaran = 0; goto zdvOh; buS2F: $yng_benar_golonganbawah = 0; goto JtlpX; Q30pj: $soal->status_kesukaran = $status_soal; goto Noc17; Ezzzn: ZKfzD: goto YGL6b; FPV_r: $daya_pembeda = $yng_benar_golonganatas / $bagi_daya - $yng_benar_golonganbawah / $bagi_daya; goto I7eG3; BB20U: dboAm: goto oSFCl; PnNpA: eATTY: goto kZ7nI; YTKc3: } goto xV0ee; BkYzn: $data["\x74\x70\137\141\x63\164\x69\x76\145"] = $tp; goto ZWHiJ; N_PH3: $nilai_pg = $this->cbt->getAllNilaiSiswa($jadwal); goto x26Tj; kQWGf: } private function pearson($x, $y) { goto iQ1N0; Llz3Y: $i = 0; goto a32kd; UWnLM: $by = 0; goto AqLuJ; lAu4D: if (!($cx > $cy)) { goto KqJPf; } goto QJScd; U33Yx: array_pop($y); goto pEWiC; QJScd: $d = $cx - $cy; goto Llz3Y; Xejst: $bx = 0; goto UWnLM; mKbvd: if (!($cx < $cy)) { goto tdhlw; } goto f0DKP; so6dp: $ret = -1; goto MZbl_; z61oa: TPFxq: goto Udh_V; FQFnj: goto g91Cr; goto Duqpn; LdmhL: if (!($i < count($x))) { goto uUUf4; } goto H0wiO; a32kd: lJ7T7: goto HRFRm; iQ1N0: $cx = count($x); goto Tn51P; gZJtM: $by += pow($yr, 2); goto gC1Q7; om2MI: $xs = array_sum($x) / count($x); goto q9Pfw; Duqpn: sqKAQ: goto UYrA_; RlRLm: qWtkm: goto k8mKb; YNjiy: $i = 0; goto wT6LT; lMRnx: zVDzt: goto mKbvd; uS0Uz: if (!($cx === 0 || $cy === 0)) { goto zVDzt; } goto emnIj; HRFRm: if (!($i < $d)) { goto YD1bZ; } goto HzgLU; HzgLU: array_pop($x); goto z61oa; AqLuJ: $i = 0; goto ornJS; Pnlxn: $y = array_values($y); goto om2MI; hXKCm: if (!(count($x) !== count($y))) { goto qWtkm; } goto HrPSY; Tn51P: $cy = count($y); goto uS0Uz; b0aEH: $bx += pow($xr, 2); goto gZJtM; fp8y6: cb6yW: goto LThbp; Np92s: KqJPf: goto hXKCm; pEWiC: YYjk7: goto dLUzj; Udh_V: $i++; goto QteuG; LTXkT: goto VHqi1; goto J6yai; oVWSM: if (!($i < $d)) { goto sqKAQ; } goto U33Yx; CQWML: $a += $xr * $yr; goto b0aEH; QteuG: goto lJ7T7; goto LhR2M; H0wiO: $xr = $x[$i] - $xs; goto exeX8; q9Pfw: $ys = array_sum($y) / count($y); goto P9XaW; dLUzj: $i++; goto FQFnj; UYrA_: tdhlw: goto lAu4D; LThbp: return $ret; goto XW1YE; HrPSY: return -1; goto RlRLm; jmaGA: $ret = $a / $b; goto fp8y6; ornJS: VHqi1: goto LdmhL; LhR2M: YD1bZ: goto Np92s; exeX8: $yr = $y[$i] - $ys; goto CQWML; emnIj: return -1; goto lMRnx; gC1Q7: DmV9i: goto FPg2k; wT6LT: g91Cr: goto oVWSM; MZbl_: if (!($b > 0)) { goto cb6yW; } goto jmaGA; J6yai: uUUf4: goto OeUQJ; f0DKP: $d = $cy - $cx; goto YNjiy; FPg2k: $i++; goto LTXkT; k8mKb: $x = array_values($x); goto Pnlxn; OeUQJ: $b = sqrt($bx * $by); goto so6dp; P9XaW: $a = 0; goto Xejst; XW1YE: } public function getNilaiKelas() { goto KhpDf; VsWOS: $data["\x6a\141\167\x61\142\141\156"] = $arrDur; goto IyN4A; VqAqz: $arrDur = []; goto iusBz; GwHe0: $siswas = $this->cbt->getSiswaByKelas($tp->id_tp, $smt->id_smt, $kelas); goto VqAqz; bfbS3: $this->output_json($data); goto uG8Q5; sLtwB: $jadwal = $this->input->get("\x6a\x61\144\x77\141\154"); goto IZ3QE; IyN4A: $data["\x69\156\146\157"] = $info; goto bfbS3; oQ1LJ: VZlDk: goto MD2vt; EFcn0: $smt = $this->dashboard->getSemesterActive(); goto jabsN; KhpDf: $kelas = $this->input->get("\x6b\x65\x6c\141\x73"); goto DG0q4; DG0q4: $sesi = $this->input->get("\x73\145\163\151"); goto sLtwB; iusBz: foreach ($siswas as $siswa) { goto XZQ5e; ESF9x: $arrJawab_essai[$siswa->id_siswa][] = array("\151\x64\137\x6a\141\x77\x61\x62\141\x6e" => 0, "\x6a\x61\167\141\142\x61\156" => '', "\152\x61\167\x61\x62\x61\156\137\142\x65\x6e\x61\162" => '', "\153\x6f\162\145\x6b\x73\x69" => 0); goto ac9qN; it7yl: $i = 0; goto MiS2i; PaYHt: $arrJawab_pg[$siswa->id_siswa][] = $this->cbt->getJawabanSiswa($siswa->id_siswa . $jadwal . $info->id_bank . 1 . ($i + 1)); goto HT_Uf; HT_Uf: na83D: goto cMrW5; BVl8m: $arrJawab_essai = []; goto it7yl; L1IyP: RZz1M: goto PKxyU; zPkuf: $jawaban = $this->cbt->getJawabanSiswa($siswa->id_siswa . $jadwal . $info->id_bank . 2 . ($j + 1)); goto GjlUA; Wq_1J: crOim: goto OpZak; XZQ5e: $arrJawab_pg = []; goto BVl8m; Ae0PX: WTrBf: goto KymsA; KymsA: if (!($j < $info->tampil_esai)) { goto nJhR8; } goto zPkuf; uPg7C: nJhR8: goto usR72; AYUtV: p10tk: goto L1IyP; rBm4b: goto WTrBf; goto uPg7C; El2No: ry2iw: goto NgRj1; PKxyU: $j++; goto rBm4b; MiS2i: jqH5n: goto h4FZf; OpZak: $j = 0; goto Ae0PX; sA4S5: qQSX2: goto JHug3; cMrW5: $i++; goto Q3TXu; Q3TXu: goto jqH5n; goto Wq_1J; ac9qN: goto p10tk; goto sA4S5; JHug3: $arrJawab_essai[$siswa->id_siswa][] = $jawaban; goto AYUtV; h4FZf: if (!($i < $info->tampil_pg)) { goto crOim; } goto PaYHt; usR72: $jawab_essai = isset($arrJawab_essai[$siswa->id_siswa]) ? $arrJawab_essai[$siswa->id_siswa] : []; goto N6exT; GjlUA: if ($jawaban != null) { goto qQSX2; } goto ESF9x; N6exT: $arrDur[$siswa->id_siswa] = ["\144\x75\162" => $this->cbt->getDurasiSiswa($siswa->id_siswa . $jadwal), "\152\141\167\x61\x62\x5f\160\x67" => $arrJawab_pg[$siswa->id_siswa], "\152\x61\x77\x61\142\137\145\163\x73\x61\x69" => $jawab_essai, "\x6c\x6f\147" => $this->cbt->getLogUjian($siswa->id_siswa, $jadwal)]; goto El2No; NgRj1: } goto oQ1LJ; IZ3QE: $tp = $this->dashboard->getTahunActive(); goto EFcn0; MD2vt: $data["\x73\151\x73\x77\x61"] = $siswas; goto VsWOS; jabsN: $info = $this->cbt->getJadwalById($jadwal, $sesi); goto GwHe0; uG8Q5: } public function getJadwalUjianByJadwal() { goto RRO5m; EGTm_: foreach ($kelas as $key => $value) { $kelases[$value["\x6b\x65\x6c\141\x73\x5f\151\144"]] = $this->dropdown->getNamaKelasById($info->id_tp, $info->id_smt, $value["\153\145\x6c\x61\x73\x5f\151\x64"]); P9qRw: } goto dRmQA; O9qOK: $tp = $this->input->get("\x74\x68\x6e"); goto M0W5D; RX8Ch: $info = $this->cbt->getJadwalById($jadwal); goto UymBE; dRmQA: GpEJL: goto tqvws; M0W5D: $smt = $this->input->get("\163\155\x74"); goto RX8Ch; tqvws: $this->output_json($kelases); goto Bw2I9; Zq4H0: $kelases = []; goto EGTm_; RRO5m: $jadwal = $this->input->get("\152\141\x64\x77\x61\154"); goto O9qOK; UymBE: $kelas = unserialize($info->bank_kelas); goto Zq4H0; Bw2I9: } public function kalkulasi() { goto TNgMX; IiHwz: $this->output_json($update); goto d5H1W; TNgMX: $jadwal = $this->input->get("\x6a\141\x64\x77\x61\154"); goto JdqtJ; JdqtJ: $update = $this->generateNilaiUjian($jadwal); goto IiHwz; d5H1W: } public function generateNilaiUjian($jadwal) { goto gQie7; WpZiC: $siswas = $this->cbt->getSiswaByKelas($info->id_tp, $info->id_smt, $kelases); goto yGuMI; S5AM2: foreach ($jawabans as $jawaban_siswa) { goto jRcg5; d6QD3: $jawaban_siswa->jawaban_benar = json_decode(json_encode($jawaban_siswa->jawaban_benar)); goto xqAyW; D23gy: $jawaban_siswa->jawaban_siswa = @unserialize($jawaban_siswa->jawaban_siswa); goto H6AzE; fkurp: $jawaban_siswa->jawaban_benar = @unserialize($jawaban_siswa->jawaban_benar); goto skXRg; zVGkz: $jawaban_siswa->jawaban_siswa = json_decode(json_encode($jawaban_siswa->jawaban_siswa)); goto d6QD3; BBYm8: if (!($jawaban_siswa->jenis_soal == "\63")) { goto L37cC; } goto D23gy; xqAyW: L37cC: goto nHY0R; wOUws: $jawaban_siswa->jawaban_benar = array_filter($jawaban_siswa->jawaban_benar, "\x73\164\162\x6c\145\x6e"); goto ZjSNe; ZjSNe: SCEqF: goto BBYm8; PyuVk: $soal[$jawaban_siswa->jenis_soal][] = $jawaban_siswa; goto DGHIm; nHY0R: $jawabans_siswa[$jawaban_siswa->id_siswa][$jawaban_siswa->jenis_soal][] = $jawaban_siswa; goto PyuVk; H6AzE: $jawaban_siswa->jawaban_benar = @unserialize($jawaban_siswa->jawaban_benar); goto zVGkz; skXRg: $jawaban_siswa->jawaban_benar = array_map("\163\164\x72\x74\x6f\165\x70\160\145\162", $jawaban_siswa->jawaban_benar); goto wOUws; yEW2e: $jawaban_siswa->opsi_a = @unserialize($jawaban_siswa->opsi_a); goto laLtD; jRcg5: if (!($jawaban_siswa->jenis_soal == "\x32")) { goto SCEqF; } goto yEW2e; DGHIm: oJrQg: goto M6fRg; laLtD: $jawaban_siswa->jawaban_siswa = @unserialize($jawaban_siswa->jawaban_siswa); goto fkurp; M6fRg: } goto EL0iJ; O680y: foreach ($kelas_bank as $key => $value) { array_push($kelases, $value["\x6b\x65\154\x61\163\x5f\151\x64"]); cwZZ_: } goto GkyUP; oSrdy: $bagi_pg2 = $info->tampil_kompleks / 100; goto vGBHP; vGBHP: $bobot_pg2 = $info->bobot_kompleks / 100; goto kdW_R; G1VqR: Xhz0n: goto fm4Cj; kVayg: $bobot_pg = $info->bobot_pg / 100; goto oSrdy; B7kK3: $kelases = []; goto O680y; f8lSN: return $update; goto rDfof; P0zWq: $bagi_pg = $info->tampil_pg / 100; goto kVayg; jISkh: $update = $this->db->update_batch("\143\142\164\137\x6e\151\154\x61\151", $insets, "\x69\144\x5f\x6e\x69\x6c\x61\x69"); goto f8lSN; La4d2: foreach ($siswas as $key => $value) { array_push($ids, $value->id_siswa); yhWh8: } goto G1VqR; fm4Cj: $jawabans = $this->cbt->getJawabanByBank($info->id_bank); goto X29I9; EL0iJ: ocaBh: goto unP6A; HQjaY: $bagi_essai = $info->tampil_esai / 100; goto k08oP; rgurj: $bobot_jodoh = $info->bobot_jodohkan / 100; goto XZhl2; KM2AH: $bobot_isian = $info->bobot_isian / 100; goto HQjaY; gQie7: $info = $this->cbt->getJadwalById($jadwal); goto P0zWq; M8miw: u7DvS: goto jISkh; yGuMI: $ids = []; goto La4d2; unP6A: $insets = []; goto Gride; TkQsm: $jawabans_siswa = []; goto S5AM2; k08oP: $bobot_essai = $info->bobot_esai / 100; goto KGIXc; X29I9: $soal = []; goto TkQsm; Gride: foreach ($siswas as $siswa) { goto MhQsy; UtbPC: if (!(count($jawaban_es) > 0)) { goto zIKPs; } goto Aafzn; bCczh: zIKPs: goto yzSVa; h6YVq: $input_es = $nilai_input->essai_nilai; goto s0TVk; MKFbs: $insert["\x69\144\x5f\x73\151\x73\167\141"] = $siswa->id_siswa; goto IMN7V; pzyxv: GEQYu: goto bCczh; LSFMp: iQtM1: goto zva6y; dIetZ: $skor_jod = $input_jod != 0 ? $input_jod : ($otomatis_jod == 0 ? $s_jod : $skor_koreksi_jod); goto uDe3R; QmqT6: $input_jod = $nilai_input->jodohkan_nilai; goto AjnnD; q5TZN: $s_pg2 = $bagi_pg2 == 0 ? 0 : $benar_pg2 / $bagi_pg2 * $bobot_pg2; goto EANkQ; HP6Kr: twDXT: goto PFGoP; Aafzn: foreach ($jawaban_es as $num => $jawab_es) { goto lex4E; sxLWc: $benar = $jawab_es != null && strtolower($jawab_es->jawaban_siswa) == strtolower($jawab_es->jawaban_benar); goto g9XHd; Q37ri: HTHwK: goto zTA2n; P20zE: $benar_es++; goto d67J3; pnWKt: $otomatis_es = $jawab_es->nilai_otomatis; goto Q37ri; lex4E: $skor_koreksi_es += $jawab_es->nilai_koreksi; goto sxLWc; d67J3: c8Hfa: goto pnWKt; g9XHd: if (!$benar) { goto c8Hfa; } goto P20zE; zTA2n: } goto pzyxv; GfRyM: $insert["\160\147\x5f\x6e\151\154\x61\x69"] = round($skor_pg, 2); goto qnf8w; ygei3: $input_es = 0; goto vNMJY; azxwA: $input_is = $nilai_input->isian_nilai; goto biXVm; GFAOc: $insert["\x6a\x6f\144\x6f\x68\153\x61\156\137\156\151\x6c\x61\151"] = round($skor_jod, 2); goto mUxIW; H0PWj: if (!($info->tampil_jodohkan > 0)) { goto H2ICk; } goto SD9v8; mzkTY: Q767Z: goto q5TZN; ffQsn: $ada_jawaban_pg2 = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\x32"]); goto xILx2; oqkCr: if (!($nilai_input != null && $nilai_input->kompleks_nilai != null)) { goto FD_2d; } goto KTgAz; u4nZu: CI5Yq: goto p0hWQ; jCiX_: $jawaban_es = $ada_jawaban_essai ? $jawabans_siswa[$siswa->id_siswa]["\65"] : []; goto UNQ3E; PK7c6: $s_jod = $bagi_jodoh == 0 ? 0 : $benar_jod / $bagi_jodoh * $bobot_jodoh; goto Snath; zeT9a: $ada_jawaban_essai = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\65"]); goto EHPqm; nX5JW: $benar_pg2 = 0; goto IBTCF; IOjic: if (!(count($jawaban_pg2) > 0)) { goto qTgey; } goto Y8DBu; mUxIW: $insert["\x69\163\151\141\156\x5f\x6e\151\x6c\141\x69"] = round($skor_is, 2); goto Ad6uJ; LVgaL: $skor_pg2 = $input_pg2 != 0 ? $input_pg2 : ($otomatis_pg2 == 0 ? $s_pg2 : $skor_koreksi_pg2); goto zjKs1; biXVm: YjB5o: goto HBLZR; tROc2: XH18u: goto kR3JA; Snath: $input_jod = 0; goto enWvt; NVaSy: $s_es = $bagi_essai == 0 ? 0 : $benar_es / $bagi_essai * $bobot_essai; goto ygei3; uKhl2: $otomatis_pg2 = 0; goto QF6M1; xILx2: $ada_jawaban_jodoh = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\x33"]); goto zgqcI; s0TVk: RV1af: goto cOuzV; EANkQ: $input_pg2 = 0; goto oqkCr; Wu_Yb: $insert["\x70\x67\137\x62\x65\x6e\x61\x72"] = $benar_pg; goto GfRyM; zgqcI: $ada_jawaban_isian = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\x34"]); goto zeT9a; uDe3R: $jawaban_is = $ada_jawaban_isian ? $jawabans_siswa[$siswa->id_siswa]["\64"] : []; goto QwjJj; OG9Xp: foreach ($jawaban_is as $num => $jawab_is) { goto vNb6P; vNb6P: $skor_koreksi_is += $jawab_is->nilai_koreksi; goto b1mIg; b1mIg: $benar = $jawab_is != null && strtolower($jawab_is->jawaban_siswa) == strtolower($jawab_is->jawaban_benar); goto RBX2e; NvffN: $otomatis_is = $jawab_is->nilai_otomatis; goto oBpu2; RBX2e: if (!$benar) { goto UHXFg; } goto uxUHD; uxUHD: $benar_is++; goto PrYPw; oBpu2: YFdy9: goto DqDKo; PrYPw: UHXFg: goto NvffN; DqDKo: } goto tROc2; QwjJj: $benar_is = 0; goto UBBqc; lPxmX: $input_is = 0; goto V1w4v; JHDPS: if (!(count($jawaban_is) > 0)) { goto zvbkl; } goto OG9Xp; hzKle: $jawaban_pg2 = $ada_jawaban_pg2 ? $jawabans_siswa[$siswa->id_siswa]["\62"] : []; goto nX5JW; KTgAz: $input_pg2 = $nilai_input->kompleks_nilai; goto uQ48z; Y8E_5: array_push($insets, $insert); goto u4nZu; cJPJ_: $insert["\x69\x64\137\x6e\x69\154\141\x69"] = $siswa->id_siswa . $jadwal; goto MKFbs; hbfKx: RHhEZ: goto TXw7I; fSzI7: if (!(count($jawaban_pg) > 0)) { goto J01DX; } goto NtdA1; ICyFM: $ada_jawaban_pg = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\x31"]); goto ffQsn; I9NvD: $skor_koreksi_jod = 0.0; goto stwxK; XngWe: $benar_pg = 0; goto ichhU; UBBqc: $skor_koreksi_is = 0.0; goto oJbBm; UNQ3E: $benar_es = 0; goto bOHDF; AjnnD: Hssmw: goto dIetZ; HBLZR: $skor_is = $input_is != 0 ? $input_is : ($otomatis_is == 0 ? $s_is : $skor_koreksi_is); goto jCiX_; TItok: gzhT7: goto dCSM4; TXw7I: qTgey: goto mzkTY; zva6y: H2ICk: goto PK7c6; umMHB: $jawaban_pg = $ada_jawaban_pg ? $jawabans_siswa[$siswa->id_siswa]["\x31"] : []; goto XngWe; ihCh_: foreach ($jawaban_jodoh as $num => $jawab_jod) { goto Ex6aK; IFe8K: $arrJwbJawab = []; goto MyStV; Ex6aK: $skor_koreksi_jod += $jawab_jod->nilai_koreksi; goto NmIkq; lVB12: $item_salah = 0; goto eiCXW; qXB7Y: OWMVT: goto MT0PM; MyStV: foreach ($arrJawab as $kolJawab) { goto kktzz; vDkcZ: foreach ($kolJawab as $po => $kol) { goto a6Bj_; A0lop: ZjFbE: goto iIgp0; a6Bj_: if (!($kol == "\x31")) { goto fTIDO; } goto e5rkL; hdb_M: fTIDO: goto A0lop; e5rkL: $sub = $headJawab[$po]; goto Ul2Pd; Ul2Pd: $jwbs->subtitle[] = $sub; goto hdb_M; iIgp0: } goto E0ZdA; kktzz: $jwbs = new stdClass(); goto vDkcZ; E0ZdA: pvLMw: goto r8728; r8728: array_push($arrJwbJawab, $jwbs); goto X7H0i; X7H0i: rGWnh: goto FI_NP; FI_NP: } goto qXB7Y; S1G83: foreach ($arrSoal as $kolSoal) { goto g8Uld; a1OPH: array_push($arrJwbSoal, $jwb); goto lnY6p; hnoEi: glJg5: goto BZb20; lnY6p: InVDP: goto upnXU; RW1om: foreach ($kolSoal as $pos => $kol) { goto osoe_; Y0RkB: $items++; goto DUQ0x; YYFlf: $jwb->subtitle[] = $headSoal[$pos]; goto Y0RkB; AnWzo: ZFWwv: goto Rr3Tg; DUQ0x: cdRM5: goto AnWzo; osoe_: if (!($kol == "\x31")) { goto cdRM5; } goto YYFlf; Rr3Tg: } goto hnoEi; BZb20: $jwb->title = array_shift($kolSoal); goto a1OPH; g8Uld: $jwb = new stdClass(); goto RW1om; upnXU: } goto OHkKQ; GNVrv: a3O8T: goto vtrQ4; vtrQ4: $benar_jod += 1 / $items * $item_benar; goto LGmQi; eiCXW: foreach ($arrJwbJawab as $p => $ajjs) { goto WRKni; pGhfu: nNd99: goto eJgW5; WRKni: foreach ($ajjs->subtitle as $pp => $ajs) { goto eak7E; lnREh: McqHD: goto cXjuh; D7Cz6: M3goa: goto uwtx5; IBtAh: goto Zvc9O; goto lnREh; VyMcO: Zvc9O: goto D7Cz6; cXjuh: $item_benar++; goto VyMcO; rqyDy: $item_salah++; goto IBtAh; eak7E: if (in_array($ajs, $arrJwbSoal[$p]->subtitle)) { goto McqHD; } goto rqyDy; uwtx5: } goto g5A86; g5A86: swwP5: goto pGhfu; eJgW5: } goto GNVrv; MT0PM: $item_benar = 0; goto lVB12; kZv42: $headJawab = array_shift($arrJawab); goto IFe8K; NmIkq: $arrSoal = $jawab_jod->jawaban_benar->jawaban; goto Fr5Nv; la9oT: $arrJawab = $jawab_jod->jawaban_siswa->jawaban; goto kZv42; LGmQi: $otomatis_jod = $jawab_jod->nilai_otomatis; goto MwmD9; HMtzx: $items = 0; goto S1G83; Fr5Nv: $headSoal = array_shift($arrSoal); goto Mg_NH; MwmD9: uhXn5: goto vML5f; Mg_NH: $arrJwbSoal = []; goto HMtzx; OHkKQ: lLS5n: goto la9oT; vML5f: } goto ICTH6; stwxK: $otomatis_jod = 0; goto H0PWj; IMN7V: $insert["\151\144\137\x6a\141\144\x77\141\154"] = $jadwal; goto Wu_Yb; EHPqm: $nilai_input = $this->cbt->getNilaiSiswaByJadwal($jadwal, $siswa->id_siswa); goto umMHB; cOuzV: $skor_es = $input_es != 0 ? $input_es : ($otomatis_es == 0 ? $s_es : $skor_koreksi_es); goto cJPJ_; kR3JA: zvbkl: goto JFdiG; Ad6uJ: $insert["\145\163\x73\x61\151\137\x6e\x69\x6c\x61\151"] = round($skor_es, 2); goto Y8E_5; NtdA1: foreach ($jawaban_pg as $jwb_pg) { goto BXLGh; uFCeg: $benar_pg += 1; goto bZ2Gz; ms4Sv: LNjoi: goto uFCeg; m9zkn: pdcD6: goto KR2fy; aA4ZW: goto M0Tsn; goto ms4Sv; VJmCB: if (strtoupper($jwb_pg->jawaban_siswa) == strtoupper($jwb_pg->jawaban_benar)) { goto LNjoi; } goto FlfbE; bZ2Gz: M0Tsn: goto iI35L; iI35L: ll1EF: goto m9zkn; BXLGh: if (!($jwb_pg != null && $jwb_pg->jawaban_siswa != null)) { goto ll1EF; } goto VJmCB; FlfbE: $salah_pg += 1; goto aA4ZW; KR2fy: } goto TItok; grdk6: $s_is = $bagi_isian == 0 ? 0 : $benar_is / $bagi_isian * $bobot_isian; goto lPxmX; ichhU: $salah_pg = 0; goto oxfRh; bOHDF: $skor_koreksi_es = 0.0; goto a2zG8; JFdiG: FWDU6: goto grdk6; zjKs1: $jawaban_jodoh = $ada_jawaban_jodoh ? $jawabans_siswa[$siswa->id_siswa]["\x33"] : []; goto PMEQ2; CdKG0: if (!($info->tampil_esai > 0)) { goto rXiNO; } goto UtbPC; vNMJY: if (!($nilai_input != null && $nilai_input->isian_nilai != null)) { goto RV1af; } goto h6YVq; oJbBm: $otomatis_is = 0; goto ahVJ7; SD9v8: if (!(count($jawaban_jodoh) > 0)) { goto iQtM1; } goto ihCh_; ICTH6: YAo4X: goto LSFMp; oxfRh: if (!($info->tampil_pg > 0)) { goto twDXT; } goto fSzI7; uQ48z: FD_2d: goto LVgaL; QF6M1: if (!($info->tampil_kompleks > 0)) { goto Q767Z; } goto IOjic; yzSVa: rXiNO: goto NVaSy; enWvt: if (!($nilai_input != null && $nilai_input->jodohkan_nilai != null)) { goto Hssmw; } goto QmqT6; MhQsy: $ada_jawaban = isset($jawabans_siswa[$siswa->id_siswa]); goto ICyFM; a2zG8: $otomatis_es = 0; goto CdKG0; Y8DBu: foreach ($jawaban_pg2 as $num => $jawab_pg2) { goto mYU4t; tXyod: $arr_benar = []; goto NcWVh; P4E7L: $skor_koreksi_pg2 += $jawab_pg2->nilai_koreksi; goto tXyod; NcWVh: foreach ($jawab_pg2->jawaban_siswa as $js) { goto G3V58; G3V58: if (!in_array($js, $jawab_pg2->jawaban_benar)) { goto nDRsa; } goto vkaWJ; J0qeH: nDRsa: goto mOBTB; mOBTB: QmG5P: goto V0VxV; vkaWJ: array_push($arr_benar, true); goto J0qeH; V0VxV: } goto ORA1v; ORA1v: QPvKf: goto xS3aR; mYU4t: $otomatis_pg2 = $jawab_pg2->nilai_otomatis; goto P4E7L; xS3aR: $benar_pg2 += 1 / count($jawab_pg2->jawaban_benar) * count($arr_benar); goto IHTKe; IHTKe: DWrxy: goto BfV82; BfV82: } goto hbfKx; PFGoP: $skor_pg = $bagi_pg == 0 ? 0 : $benar_pg / $bagi_pg * $bobot_pg; goto hzKle; PMEQ2: $benar_jod = 0; goto I9NvD; dCSM4: J01DX: goto HP6Kr; V1w4v: if (!($nilai_input != null && $nilai_input->isian_nilai != null)) { goto YjB5o; } goto azxwA; IBTCF: $skor_koreksi_pg2 = 0.0; goto uKhl2; qnf8w: $insert["\x6b\157\155\x70\154\x65\153\163\137\156\x69\154\141\151"] = round($skor_pg2, 2); goto GFAOc; ahVJ7: if (!($info->tampil_isian > 0)) { goto FWDU6; } goto JHDPS; p0hWQ: } goto M8miw; GkyUP: SnLDX: goto WpZiC; XZhl2: $bagi_isian = $info->tampil_isian / 100; goto KM2AH; kdW_R: $bagi_jodoh = $info->tampil_jodohkan / 100; goto rgurj; KGIXc: $kelas_bank = unserialize($info->bank_kelas); goto B7kK3; rDfof: } private function nilaiSignifikansi($jml) { goto ak5Lt; h9Evc: return $list[$keys]["\x31"]; goto nlVNn; G6L4F: UwqKj: goto Ty6lI; rCXRd: $keys = 4; goto Y7K9f; KBt92: return $list[$jml]["\x31"]; goto KfnPX; BqRHF: I0b03: goto n69nb; kpYq8: Ls8ly: goto JleSR; zHyCH: H2WsO: goto MsHud; nlVNn: goto I0b03; goto G6L4F; Y7K9f: aShlj: goto D9SYX; JleSR: return $list[$jml]["\x35"]; goto zHyCH; Fb2WA: if (isset($list[$jml]["\x35"])) { goto Ls8ly; } goto KBt92; n69nb: goto RKDsJ; goto YWLP2; Cj4xZ: if (!($keys < 4)) { goto aShlj; } goto rCXRd; D9SYX: if (isset($list[$keys]["\65"])) { goto UwqKj; } goto h9Evc; jXDOs: if (isset($list[$jml])) { goto aZHuk; } goto I9Rmj; ak5Lt: $list = [3 => [5 => 0.997], [1 => 0.999], 4 => [5 => 0.95], [1 => 0.99], 5 => [5 => 0.878], [1 => 0.959], 6 => [5 => 0.8110000000000001], [1 => 0.917], 7 => [5 => 0.754], [1 => 0.874], 8 => [5 => 0.707], [1 => 0.834], 9 => [5 => 0.666], [1 => 0.798], 10 => [5 => 0.632], [1 => 0.765], 11 => [5 => 0.602], [1 => 0.735], 12 => [5 => 0.576], [1 => 0.708], 13 => [5 => 0.553], [1 => 0.6840000000000001], 14 => [5 => 0.532], [1 => 0.661], 15 => [5 => 0.514], [1 => 0.641], 16 => [5 => 0.497], [1 => 0.623], 17 => [5 => 0.482], [1 => 0.606], 18 => [5 => 0.468], [1 => 0.59], 19 => [5 => 0.456], [1 => 0.575], 20 => [5 => 0.444], [1 => 0.5610000000000001], 21 => [5 => 0.433], [1 => 0.549], 22 => [5 => 0.423], [1 => 0.537], 23 => [5 => 0.413], [1 => 0.526], 24 => [5 => 0.404], [1 => 0.515], 25 => [5 => 0.396], [1 => 0.505], 26 => [5 => 0.388], [1 => 0.496], 27 => [5 => 0.381], [1 => 0.487], 28 => [5 => 0.374], [1 => 0.478], 29 => [5 => 0.367], [1 => 0.47], 30 => [5 => 0.361], [1 => 0.463], 31 => [5 => 0.355], [1 => 0.456], 32 => [5 => 0.349], [1 => 0.449], 33 => [5 => 0.344], [1 => 0.442], 34 => [5 => 0.339], [1 => 0.436], 35 => [5 => 0.334], [1 => 0.43], 36 => [5 => 0.329], [1 => 0.424], 37 => [5 => 0.325], [1 => 0.418], 38 => [5 => 0.32], [1 => 0.413], 39 => [5 => 0.316], [1 => 0.408], 40 => [5 => 0.312], [1 => 0.403], 41 => [5 => 0.308], [1 => 0.398], 42 => [5 => 0.304], [1 => 0.393], 43 => [5 => 0.301], [1 => 0.389], 44 => [5 => 0.297], [1 => 0.384], 45 => [5 => 0.294], [1 => 0.38], 46 => [5 => 0.291], [1 => 0.376], 47 => [5 => 0.288], [1 => 0.372], 48 => [5 => 0.284], [1 => 0.368], 49 => [5 => 0.281], [1 => 0.364], 50 => [5 => 0.279], [1 => 0.361], 55 => [5 => 0.266], [1 => 0.345], 60 => [5 => 0.254], [1 => 0.33], 65 => [5 => 0.244], [1 => 0.317], 70 => [5 => 0.235], [1 => 0.306], 75 => [5 => 0.227], [1 => 0.296], 80 => [5 => 0.22], [1 => 0.286], 85 => [5 => 0.213], [1 => 0.278], 90 => [5 => 0.207], [1 => 0.27], 95 => [5 => 0.202], [1 => 0.263], 100 => [5 => 0.195], [1 => 0.256], 125 => [5 => 0.176], [1 => 0.23], 150 => [5 => 0.159], [1 => 0.21], 175 => [5 => 0.149], [1 => 0.194], 200 => [5 => 0.138], [1 => 0.191], 300 => [5 => 0.113], [1 => 0.181], 400 => [5 => 0.098], [1 => 0.148], 500 => [5 => 0.08799999999999999], [1 => 0.128], 600 => [5 => 0.08], [1 => 0.115], 700 => [5 => 0.074], [1 => 0.105], 800 => [5 => 0.07000000000000001], [1 => 0.091], 900 => [5 => 0.065], [1 => 0.08599999999999999], 1000 => [5 => 0.062], [1 => 0.081]]; goto jXDOs; I9Rmj: $keys = $this->getClosest($jml, array_keys($list)); goto Cj4xZ; KfnPX: goto H2WsO; goto kpYq8; Ty6lI: return $list[$keys]["\x35"]; goto BqRHF; MsHud: RKDsJ: goto sXwrq; YWLP2: aZHuk: goto Fb2WA; sXwrq: } function getClosest($search, $arr) { goto aGUeJ; I4YzH: foreach ($arr as $item) { goto TOoK1; epr8M: QErQx: goto fuhzK; FOP8s: $closest = $item; goto YksGA; YksGA: ILaDu: goto epr8M; TOoK1: if (!($closest === null || abs($search - $closest) > abs($item - $search))) { goto ILaDu; } goto FOP8s; fuhzK: } goto h5egB; ZdtsS: return $closest; goto iQ9uA; h5egB: ayGHK: goto ZdtsS; aGUeJ: $closest = null; goto I4YzH; iQ9uA: } }
