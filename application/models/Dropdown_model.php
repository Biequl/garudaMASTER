<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Dropdown_model extends CI_Model { public function getBulan() { goto msGl_; hfN7M: vzW7x: goto fAn5g; msGl_: $result = $this->db->get("\142\165\154\141\156")->result(); goto QqOpj; gPnm4: foreach ($result as $key => $row) { $ret[$row->id_bln] = $row->nama_bln; GuTNY: } goto S5vZI; WpjBP: if (!$result) { goto vzW7x; } goto gPnm4; S5vZI: KhYZZ: goto hfN7M; QqOpj: $ret = []; goto WpjBP; fAn5g: return $ret; goto Kkt52; Kkt52: } public function getAllSesi() { goto ZAqx4; PnTLV: if (!$result) { goto e0Mhn; } goto TpZFT; lRyat: e0Mhn: goto gkwOu; fTQam: OIwuk: goto lRyat; gkwOu: return $ret; goto V9er0; TpZFT: foreach ($result as $key => $row) { $ret[$row->id_sesi] = $row->nama_sesi; yf1Am: } goto fTQam; ZAqx4: $result = $this->db->get("\x63\142\x74\137\163\145\163\x69")->result(); goto PnTLV; V9er0: } public function getAllRuang() { goto hxG9w; vE957: return $ret; goto r4d1C; fsoDU: C4MJh: goto OEY6a; hxG9w: $result = $this->db->get("\x63\142\x74\x5f\162\x75\x61\x6e\x67")->result(); goto f2aiO; i2Wm5: foreach ($result as $key => $row) { $ret[$row->id_ruang] = $row->nama_ruang; giWyV: } goto fsoDU; f2aiO: $ret = []; goto SkmMh; OEY6a: vTFUO: goto vE957; SkmMh: if (!$result) { goto vTFUO; } goto i2Wm5; r4d1C: } public function getAllWaktuSesi() { goto zM9IT; zxTsA: p_FVS: goto lU_1A; zM9IT: $result = $this->db->get("\143\x62\164\x5f\x73\145\x73\151")->result(); goto UEtif; nDnIR: foreach ($result as $key => $row) { $ret[$row->id_sesi] = ["\x6d\x75\154\x61\x69" => $row->waktu_mulai, "\x61\153\x68\151\x72" => $row->waktu_akhir]; lD2hM: } goto zxTsA; lU_1A: eOqf1: goto ZQhIE; ZQhIE: return $ret; goto WTFZH; UEtif: if (!$result) { goto eOqf1; } goto nDnIR; WTFZH: } public function getDataKelompokMapel() { goto X12Jp; qydxr: foreach ($result as $row) { $ret[$row->kode_kel_mapel] = $row->nama_kel_mapel; qfYpG: } goto oTYPi; KGAmD: $this->db->order_by("\153\x6f\x64\145\137\153\145\154\137\155\x61\x70\x65\154"); goto y60Fn; Xj8Xd: return $ret; goto jk42r; oTYPi: YGldD: goto Xj8Xd; Kk00I: $ret = []; goto qydxr; OpRFQ: $this->db->from("\x6d\141\163\x74\x65\162\137\x6b\145\154\x6f\155\160\x6f\153\137\155\141\x70\145\154"); goto KGAmD; X12Jp: $this->db->select("\52"); goto OpRFQ; y60Fn: $result = $this->db->get()->result(); goto Kk00I; jk42r: } public function getAllMapel() { goto w6VjR; PIwSr: if (!$result) { goto M05lC; } goto qwxps; uEDhA: $this->db->where("\163\x74\x61\x74\x75\163", "\x31"); goto Zk9Fg; Zk9Fg: $result = $this->db->get("\155\x61\x73\164\x65\162\x5f\x6d\x61\x70\145\154")->result(); goto PIwSr; v3GEG: return $ret; goto FqlPY; Lf0DV: lP52V: goto f57uq; w6VjR: $this->db->order_by("\165\x72\165\164\141\x6e\137\164\141\x6d\160\151\x6c"); goto uEDhA; qwxps: foreach ($result as $key => $row) { $ret[$row->id_mapel] = $row->nama_mapel; uI18M: } goto Lf0DV; f57uq: M05lC: goto v3GEG; FqlPY: } public function getAllKodeMapel() { goto JLSx_; JLSx_: $this->db->order_by("\165\x72\x75\164\x61\156\x5f\164\x61\x6d\x70\151\154"); goto AmAAc; Z5JHT: oc0iK: goto UtSmX; t4vE6: DzjcB: goto Z5JHT; Jdrw3: foreach ($result as $key => $row) { $ret[$row->id_mapel] = $row->kode; VluhH: } goto t4vE6; zw5np: $ret[''] = "\124\151\144\141\x6b\x20\141\144\x61"; goto KT7j3; KT7j3: if (!$result) { goto oc0iK; } goto Jdrw3; UtSmX: return $ret; goto oeJ33; AmAAc: $this->db->where("\x73\x74\141\164\165\x73", "\61"); goto fv3T9; fv3T9: $result = $this->db->get("\x6d\x61\163\164\145\162\x5f\x6d\x61\160\x65\x6c")->result(); goto zw5np; oeJ33: } public function getAllMapelPeminatan() { goto qpArZ; qpArZ: $this->db->select("\52"); goto ZWnhG; vjZRU: if (!(count($ress) > 0)) { goto qZd0X; } goto g0DSN; V_ecn: $ress = []; goto Dy6UG; rUleH: NpuMd: goto koS7b; g0DSN: $this->db->where_in("\153\145\x6c\157\x6d\160\x6f\x6b", $ress); goto NrdOv; sqD9s: $result = $this->db->get("\x6d\x61\x73\x74\145\x72\x5f\x6d\x61\x70\145\x6c")->result(); goto hokEb; I804x: foreach ($result as $key => $row) { $ret[$row->id_mapel] = $row->nama_mapel; WJLz7: } goto n0Fr8; Dy6UG: if (!$res) { goto txNmu; } goto rpDEP; Ho32E: WuRWW: goto zaIph; u_L7E: return $ret; goto SiBX3; BMXGH: $res = $this->db->get("\x6d\141\163\x74\x65\162\x5f\155\141\x70\145\x6c")->result(); goto V_ecn; n0Fr8: PUGCx: goto rUleH; cQ31R: $this->db->where("\153\x61\x74\145\147\157\162\x69\x20\74\76\40\42\x57\x41\x4a\x49\x42\42")->or_where("\x6b\141\164\x65\147\157\162\151\x20\x3c\x3e\40\x22\120\101\111\40\50\113\x65\155\145\156\x61\147\51\x22"); goto BMXGH; rpDEP: foreach ($res as $key => $row) { $ress[$row->id_kel_mapel] = $row->kode_kel_mapel; ZtjYC: } goto Ho32E; hokEb: if (!$result) { goto NpuMd; } goto I804x; TOi2P: $ret = []; goto vjZRU; zaIph: txNmu: goto TOi2P; koS7b: qZd0X: goto u_L7E; ZWnhG: $this->db->from("\x6d\x61\x73\x74\145\162\137\x6b\x65\x6c\157\155\x70\x6f\153\137\155\x61\x70\145\154"); goto cQ31R; NrdOv: $this->db->order_by("\x75\162\x75\164\141\156\x5f\164\141\155\x70\151\154"); goto sqD9s; SiBX3: } public function getAllLevel($jenjang) { goto g0keS; eDYAB: G5ZNJ: goto LpBXj; HS0YT: goto HKdV1; goto fAZBe; bS2sF: $levels = ["\67" => "\x37", "\70" => "\70", "\x39" => "\x39"]; goto CvJOC; g0keS: $levels = []; goto yyqiZ; lxU08: l6G03: goto bS2sF; Or05r: HKdV1: goto YYts_; JiRGq: goto HKdV1; goto lxU08; TfiUa: $levels = ["\x31" => "\61", "\62" => "\x32", "\x33" => "\x33", "\64" => "\x34", "\65" => "\x35", "\x36" => "\x36"]; goto JiRGq; YYts_: return $levels; goto gmXLg; LpBXj: $levels = ["\61\60" => "\x31\x30", "\x31\61" => "\61\x31", "\61\x32" => "\61\62"]; goto Or05r; wWXBq: if ($jenjang == "\x32") { goto l6G03; } goto DXkws; fAZBe: JIGdy: goto TfiUa; yyqiZ: if ($jenjang == "\61") { goto JIGdy; } goto wWXBq; DXkws: if ($jenjang == "\x33") { goto G5ZNJ; } goto HS0YT; CvJOC: goto HKdV1; goto eDYAB; gmXLg: } public function getAllKelas($tp, $smt, $level = null) { goto jP83u; cy7g1: $this->db->order_by("\154\x65\x76\x65\154\137\x69\144", "\x41\x53\x43"); goto bdmRE; VHaID: nBmE5: goto CFAEK; jR6CT: $ret = []; goto aKIWy; hM964: return $ret; goto uPoA2; Eqy8R: Kwy2H: goto j0DBL; ITelJ: $this->db->where("\151\x64\137\x73\155\164", $smt); goto cy7g1; CFAEK: zboqa: goto hM964; j0DBL: foreach ($result as $key => $row) { $ret[$row->id_kelas] = $row->nama_kelas; AwYZ9: } goto VHaID; WWGhM: $ret = []; goto pwXvD; Vi4rT: $this->db->where("\151\x64\137\164\x70", $tp); goto ITelJ; tu3SU: if (!($level != null)) { goto ijNoF; } goto IA4pp; bdmRE: $this->db->order_by("\156\x61\155\x61\137\x6b\145\x6c\141\x73", "\101\123\103"); goto tu3SU; jmZnf: $this->db->from("\x6d\x61\163\164\x65\x72\x5f\x6b\145\154\141\163"); goto Vi4rT; CZFjx: $result = $this->db->get()->result(); goto WWGhM; YRgbg: ijNoF: goto CZFjx; aKIWy: goto zboqa; goto Eqy8R; pwXvD: if ($result) { goto Kwy2H; } goto jR6CT; IA4pp: $this->db->where("\x6c\x65\166\x65\x6c\137\151\144" . $level); goto YRgbg; jP83u: $this->db->select("\52"); goto jmZnf; uPoA2: } public function getAllKeyKodeKelas($tp, $smt) { goto ZFZKv; HvOlo: foreach ($result as $key => $row) { $ret[$row->kode_kelas] = $row->nama_kelas; HcsoC: } goto RhtVL; cObNh: uaW7P: goto TU46I; rwKAb: $ret = []; goto jgL4t; p7rgQ: $this->db->from("\x6d\x61\163\164\x65\162\137\x6b\145\x6c\x61\x73"); goto DCSkU; TU46I: return $ret; goto yxmB3; jgL4t: goto uaW7P; goto lQ_18; oqzEp: $result = $this->db->get()->result(); goto hH3xb; lQ_18: I3rCd: goto HvOlo; hH3xb: if ($result) { goto I3rCd; } goto rwKAb; ZFZKv: $this->db->select("\52"); goto p7rgQ; NcSGP: $this->db->where("\151\144\x5f\x73\155\x74", $smt); goto oqzEp; RhtVL: DfwSU: goto cObNh; DCSkU: $this->db->where("\151\144\x5f\x74\x70", $tp); goto NcSGP; yxmB3: } public function getAllKodeKelas($tp = null, $smt = null) { goto qNJiI; rJga0: if (!($tp != null)) { goto bBnFQ; } goto FZ_m2; FkGyp: if (!($smt != null)) { goto M2ZjN; } goto zPS6w; UNsWK: $ret = []; goto LNck2; HEFs_: oF4a1: goto t3Glu; zPS6w: $this->db->where("\151\x64\x5f\163\x6d\x74", $smt); goto lzPbT; UmP8T: $result = $this->db->get()->result(); goto ikWpN; LNck2: goto LJrsK; goto WpHeh; BJdnj: foreach ($result as $key => $row) { $ret[$row->id_kelas] = $row->kode_kelas; spcjj: } goto HEFs_; FZ_m2: $this->db->where("\x69\144\x5f\x74\x70", $tp); goto MFeEs; ikWpN: if ($result) { goto t1P8h; } goto UNsWK; lzPbT: M2ZjN: goto UmP8T; WpHeh: t1P8h: goto BJdnj; HPl7i: return $ret; goto PgoyU; MFeEs: bBnFQ: goto FkGyp; qNJiI: $this->db->select("\52"); goto P4e6_; t3Glu: LJrsK: goto HPl7i; P4e6_: $this->db->from("\x6d\x61\163\x74\x65\162\x5f\x6b\145\154\141\x73"); goto rJga0; PgoyU: } public function getNamaKelasById($tp, $smt, $id) { goto SNnjY; JmKtj: kPLRk: goto f76nZ; f76nZ: return $result->nama_kelas; goto pfGR_; LTyhz: $this->db->where("\x69\x64\x5f\164\x70", $tp); goto uJPL1; G4cLc: $result = $this->db->get("\x6d\x61\163\x74\x65\162\x5f\153\145\154\141\163")->row(); goto bLUIX; pfGR_: D2amB: goto RnrQT; uJPL1: $this->db->where("\x69\144\137\x73\x6d\164", $smt); goto G4cLc; bLUIX: if ($result != null) { goto kPLRk; } goto Y7HUS; Y7HUS: return null; goto qPq1U; qPq1U: goto D2amB; goto JmKtj; SNnjY: $this->db->select("\x6e\141\x6d\141\137\x6b\x65\x6c\x61\163"); goto bXRE1; bXRE1: $this->db->where("\x69\144\137\x6b\x65\154\141\163", $id); goto LTyhz; RnrQT: } public function getAllKelasByArrayId($tp, $smt, $arrId) { goto oYEWp; bmk4C: foreach ($result as $key => $row) { $ret[$row->id_kelas] = $row->nama_kelas; gOVOH: } goto qJO0R; FSpec: $this->db->where("\x69\144\x5f\164\x70", $tp); goto iBTm0; Nb_VC: $ret = []; goto DLak7; DLak7: if (!$result) { goto rMe7U; } goto bmk4C; ixmnH: $result = $this->db->get()->result(); goto Nb_VC; wX2gb: rMe7U: goto bE3pu; qJO0R: cHcLr: goto wX2gb; oYEWp: $this->db->select("\x2a"); goto MEucp; MEucp: $this->db->from("\x6d\x61\163\x74\145\162\x5f\153\145\154\x61\163"); goto FSpec; bE3pu: return $ret; goto L_noM; iBTm0: $this->db->where_in("\151\x64\137\x6b\x65\x6c\x61\163", $arrId); goto ixmnH; L_noM: } public function getAllEkskul() { goto atwaP; dufEi: GP7S1: goto AisRs; LhviU: foreach ($result as $key => $row) { $ret[$row->id_ekstra] = $row->nama_ekstra; sPh2x: } goto dufEi; LkQqS: return $ret; goto aav8w; atwaP: $result = $this->db->get("\155\141\163\x74\x65\x72\137\145\x6b\163\x74\162\141")->result(); goto ZbJg7; ZbJg7: if (!$result) { goto GRHaX; } goto LhviU; AisRs: GRHaX: goto LkQqS; aav8w: } public function getAllKodeEkskul() { goto U_u3F; YDxkP: nC2ho: goto uPPp3; tuPK1: if (!$result) { goto nC2ho; } goto vkSDM; vkSDM: foreach ($result as $key => $row) { $ret[$row->id_ekstra] = $row->kode_ekstra; feJtw: } goto v8WeX; uPPp3: return $ret; goto xYp74; U_u3F: $result = $this->db->get("\155\x61\x73\x74\145\162\137\x65\x6b\163\x74\162\141")->result(); goto tuPK1; v8WeX: cB6WL: goto YDxkP; xYp74: } public function getAllJurusan() { goto s6HF4; u1b3R: return $ret; goto MZ9nn; EKQ1c: B2v95: goto u1b3R; H0_79: foreach ($result as $key => $row) { $ret[$row->id_jurusan] = $row->kode_jurusan; M8Bt0: } goto lirQT; lirQT: o1s41: goto EKQ1c; s6HF4: $result = $this->db->get("\155\x61\x73\x74\145\162\137\152\165\162\x75\163\x61\156")->result(); goto LnCRG; LnCRG: if (!$result) { goto B2v95; } goto H0_79; MZ9nn: } public function getAllGuru() { goto YaAUJ; mgXyj: yX2MO: goto f9_KJ; R9PDi: if (!$result) { goto MFJ_S; } goto mOeaU; tY3LR: $result = $this->db->get()->result(); goto dwZtJ; yrKRI: $this->db->join("\165\163\145\x72\x73\40\x65", "\141\x2e\x75\x73\x65\x72\156\x61\x6d\145\75\x65\56\x75\x73\145\162\156\141\x6d\145"); goto tY3LR; m9T6m: $this->db->from("\x6d\x61\x73\164\145\x72\137\147\x75\162\x75\x20\141"); goto yrKRI; mOeaU: foreach ($result as $key => $row) { $ret[$row->id_guru] = $row->nama_guru; yjnSG: } goto mgXyj; F9cJ8: return $ret; goto DzyJA; dwZtJ: $ret["\x30"] = "\x50\x69\154\151\x68\x20\x47\165\x72\165\x20\72"; goto R9PDi; f9_KJ: MFJ_S: goto F9cJ8; YaAUJ: $this->db->select("\x61\x2e\151\144\137\147\165\x72\x75\x2c\40\x61\x2e\156\x61\155\x61\x5f\x67\x75\x72\165"); goto m9T6m; DzyJA: } public function getAllLevelGuru() { goto nuTvd; D9Mo3: if (!$result) { goto xSrTl; } goto c3UpM; xE0AD: xSrTl: goto eMGTr; nuTvd: $result = $this->db->get("\x6c\x65\166\x65\154\x5f\x67\165\x72\165")->result(); goto nAS2E; eMGTr: return $ret; goto d6VHT; nAS2E: $ret[''] = "\120\x69\x6c\x69\x68\40\112\x61\142\x61\x74\x61\156\40\x3a"; goto D9Mo3; Rmabs: QllOZ: goto xE0AD; c3UpM: foreach ($result as $key => $row) { $ret[$row->id_level] = $row->level; aBu5o: } goto Rmabs; d6VHT: } public function getAllJenisUjian() { goto VukES; AVFuD: JFVZs: goto ziSzA; bYWKo: if (!$result) { goto PlzMx; } goto D_kt9; ziSzA: PlzMx: goto lsQp7; D_kt9: foreach ($result as $key => $row) { $ret[$row->id_jenis] = $row->nama_jenis . "\x20\50" . $row->kode_jenis . "\x29"; AtpK5: } goto AVFuD; VukES: $result = $this->db->get("\143\142\x74\137\152\145\156\151\x73")->result(); goto bYWKo; lsQp7: return $ret; goto suT77; suT77: } public function getAllBankSoal() { goto m7f90; m7f90: $result = $this->db->get("\x63\x62\164\x5f\142\x61\156\x6b\137\x73\157\141\154")->result(); goto YZURQ; l6fXA: NRB50: goto dA7ZG; dA7ZG: return $ret; goto HetA5; fanfz: foreach ($result as $key => $row) { $ret[$row->id_bank] = $row->bank_kode; cYXY1: } goto tCls9; tCls9: sjgGs: goto l6fXA; YZURQ: $ret[''] = "\120\x69\154\x69\x68\40\102\x61\x6e\x6b\40\123\157\141\154\40\72"; goto qhHZM; qhHZM: if (!$result) { goto NRB50; } goto fanfz; HetA5: } public function getAllJadwal($tp, $smt) { goto mrV7b; r3Lxb: $this->db->join("\x63\142\164\137\x62\141\x6e\x6b\x5f\163\x6f\x61\x6c\x20\142", "\142\x2e\x69\144\x5f\x62\x61\156\x6b\75\141\x2e\151\x64\137\142\141\x6e\153"); goto wB49T; Fanrq: QromP: goto vcziD; grFLE: $ret = []; goto e2lHg; lFW1u: xdBNX: goto Fanrq; mrV7b: $this->db->from("\x63\142\164\137\152\141\x64\167\x61\x6c\x20\x61"); goto r3Lxb; Biz4l: $result = $this->db->get()->result(); goto grFLE; e2lHg: if (!$result) { goto QromP; } goto eiB0a; DaZvV: $this->db->where("\141\x2e\x69\x64\137\163\155\164", $smt); goto Biz4l; vcziD: return $ret; goto QODjq; wB49T: $this->db->where("\x61\56\151\x64\137\164\x70", $tp); goto DaZvV; eiB0a: foreach ($result as $key => $row) { $ret[$row->id_jadwal] = $row->bank_kode; m_p8Y: } goto lFW1u; QODjq: } public function getAllJadwalGuru($tp, $smt, $guru) { goto kYyM0; nQrj1: if (!$result) { goto VAdvv; } goto vKfYh; kYyM0: $this->db->from("\x63\x62\164\137\152\141\144\x77\141\154\40\141"); goto ClVJo; ghHuO: $this->db->where("\x61\56\x69\x64\x5f\164\160", $tp); goto FpCIH; ClVJo: $this->db->join("\143\142\164\x5f\x62\141\x6e\x6b\x5f\163\x6f\141\x6c\x20\x62", "\x62\56\151\144\x5f\142\x61\x6e\153\75\141\x2e\151\144\x5f\142\x61\156\x6b\40\101\x4e\104\x20\142\56\142\141\x6e\153\137\147\165\x72\165\137\x69\x64\75" . $guru); goto ghHuO; vKfYh: foreach ($result as $key => $row) { $ret[$row->id_jadwal] = $row->bank_kode; YA1sY: } goto jw9hT; jw9hT: yCBoH: goto fS2UZ; fS2UZ: VAdvv: goto qi5BL; d0K2E: $result = $this->db->get()->result(); goto sCYnj; qi5BL: return $ret; goto kbmNS; sCYnj: $ret = []; goto nQrj1; FpCIH: $this->db->where("\x61\x2e\x69\x64\x5f\x73\x6d\x74", $smt); goto d0K2E; kbmNS: } public function getAllJenisJadwal($tp, $smt, $jenis, $mapel) { goto kp07t; GA_1Z: xVYML: goto zb677; r6sEp: mFyzy: goto lXCc8; zb677: $this->db->where("\141\56\151\x64\137\x74\x70", $tp); goto eVg6g; rLW2v: if ($mapel == "\60") { goto mFyzy; } goto NimzO; mazd3: if (!$result) { goto ZE6z6; } goto PMhl1; tPuPs: ZE6z6: goto aFt_h; shDZS: $this->db->where("\x61\56\151\144\x5f\x6a\x65\x6e\151\x73", $jenis); goto dNUCT; Dv_IJ: goto xVYML; goto r6sEp; lXCc8: $this->db->join("\x63\x62\164\137\x62\141\156\153\137\163\x6f\x61\x6c\x20\142", "\142\x2e\x69\144\x5f\x62\x61\156\153\75\141\x2e\x69\144\137\142\141\x6e\153"); goto GA_1Z; b5dNQ: $ret = []; goto mazd3; aFt_h: return $ret; goto bPo_G; kp07t: $this->db->from("\143\142\x74\x5f\x6a\141\144\x77\141\154\40\141"); goto rLW2v; QpjwB: SpCNj: goto tPuPs; dNUCT: $result = $this->db->get()->result(); goto b5dNQ; PMhl1: foreach ($result as $key => $row) { $ret[$row->id_jadwal] = $row->bank_kode; HAZX4: } goto QpjwB; NimzO: $this->db->join("\x63\x62\164\137\142\x61\156\x6b\137\163\x6f\141\x6c\40\x62", "\142\56\x69\144\137\142\x61\x6e\x6b\75\x61\56\151\144\x5f\x62\x61\156\x6b\x20\101\116\104\40\x62\x2e\142\x61\x6e\153\x5f\155\141\x70\145\x6c\137\x69\144\x3d" . $mapel . "\x20"); goto Dv_IJ; eVg6g: $this->db->where("\141\x2e\151\144\x5f\163\155\164", $smt); goto shDZS; bPo_G: } }
