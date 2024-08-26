<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CETAK SURAT</title>
    <link rel="shortcut icon" href="assets/img/logo_small.png">
    <link rel="stylesheet" href="assets/css/formsurat.css">
    <style type="text/css" media="print">
        @page {
            margin: 0;
        }

        body {
            margin: 1cm;
            font-family: "Times New Roman", Times, serif;
        }

        .kop {
            text-transform: uppercase;
            line-height: 1.2; /* Menambahkan line-height untuk jarak antar baris */
        }

        .kop2 {
            text-transform: capitalize;
        }

        .kop3 {
            text-transform: uppercase;
            font-weight: bold;
        }

        .indentasi {
            padding-left: 50px;
        }

        .imgspace {
            margin-top: 10px;
        }

        .logo {
            width: 60px;
        }

        .kop-table {
            width: 100%;
            border-collapse: collapse;
        }

        .kop-table td {
            vertical-align: middle;
            text-align: center;
        }

        .kop-table img {
            vertical-align: middle;
            margin-right: 20px;
        }

        hr {
            margin-top: 0.5em; /* Mengurangi jarak antara alamat dan garis bawah */
            margin-bottom: 0.5em; /* Mengurangi jarak antara garis bawah dan konten lainnya */
        }
    </style>
</head>

<body>
    <div>
        <div class="header">
            <img src="assets/img/logoKlaten.png" alt="Logo Klaten" class="logo">
            <div class="header-content">
                <div class="kop-kabupaten">PEMERINTAH KABUPATEN KLATEN</div>
                <div class="kop-kecamatan">KECAMATAN CAWAS</div>
                <div class="kop-desa">DESA MLESE</div>
                <div class="kop-alamat">Alamat : Cabeyan, Mlese, Cawas, Klaten, Kode Pos 57463</div>
            </div>
        </div>
       
        <div align="center">
            <u><h4 class="kop">SURAT KETERANGAN</h4></u>
            <span class="kop3">Nomor : {{ $data['id'] }} - {{ $data['created_date']->format('d-m-Y') }}</span>
        </div>
        <br>

        <table width="100%">
            <tr>
                <td class="indentasi">Yang bertanda tangan di bawah ini, Kepala Desa Mlese, Kecamatan Cawas, Kabupaten Klaten, menerangkan dengan sebenarnya bahwa:</td>
            </tr>
        </table>
        <br>

        <table width="100%" style="text-transform: capitalize;">
            <tr>
                <td width="30%" class="indentasi">N A M A</td>
                <td width="2%">:</td>
                <td width="68%" style="text-transform: uppercase; font-weight: bold;">{{ $data->user->nik->nama }}</td>
            </tr>
            <tr>
                <td class="indentasi">Jenis Kelamin</td>
                <td>:</td>
                <td>{{ $data->user->nik->jenis_kelamin }}</td>
            </tr>
            <tr>
                <td class="indentasi">Tempat/Tgl. Lahir</td>
                <td>:</td>
                <td>{{ $data->user->nik->tempat_lahir }}, {{ $data->user->nik->tanggal_lahir }}</td>
            </tr>
            <tr>
                <td class="indentasi">Agama</td>
                <td>:</td>
                <td>{{ $data->user->nik->agama }}</td>
            </tr>
            <tr>
                <td class="indentasi">Pekerjaan</td>
                <td>:</td>
                <td>{{ $data->user->nik->pekerjaan }}</td>
            </tr>
            <tr>
                <td class="indentasi">NIK</td>
                <td>:</td>
                <td>{{ $data->user->nik->id_ktp }}</td>
            </tr>
            <tr>
                <td class="indentasi">Alamat</td>
                <td>:</td>
                <td>{{ $data->user->nik->alamat }}, RT {{ $data->user->nik->rt }} /RW {{ $data->user->nik->rw }},
                    Dusun {{ $data->user->nik->dusun }}, Desa {{ $data->user->nik->kelurahan }},
                    Kecamatan {{ $data->user->nik->kecamatan }}, {{ $data->user->nik->kabupaten }}
                </td>
            </tr>
            <tr>
                <td class="indentasi">Kewarganegaraan</td>
                <td>:</td>
                <td style="text-transform: uppercase;">{{ $data->user->nik->kewarganegaraan }}</td>
            </tr>
        </table>
        <br>

        <table width="100%">
            <tr>
                <td class="indentasi">Orang tersebut di atas benar-benar penduduk kami Desa Caturtunggal, Kecamatan Depok. Bahwa nama yang bersangkutan berada di lingkungan Desa Mlese.</td>
            </tr>
        </table>
        <br>

        <table width="100%">
            <tr>
                <td class="indentasi">Surat keterangan ini dipergunakan untuk <u><b>{{ $data->kebutuhan }}.</b></u></td>
            </tr>
        </table>
        <br>

        <table width="100%">
            <tr>
                <td class="indentasi">Demikian surat keterangan ini dibuat dengan sebenar-benarnya dan digunakan sebagaimana mestinya.</td>
            </tr>
        </table>
        <br>

        <table width="100%" style="text-transform: capitalize;">
            <tr>
                <td width="10%"></td>
                <td width="30%"></td>
                <td width="10%"></td>
                <td align="center">
                    Mlese, 
                    @php
                        $tanggal = date('d F Y');
                        $bulan = date('F', strtotime($tanggal));
                        $bulanIndo = [
                            'January' => 'Januari',
                            'February' => 'Februari',
                            'March' => 'Maret',
                            'April' => 'April',
                            'May' => 'Mei',
                            'June' => 'Juni',
                            'July' => 'Juli',
                            'August' => 'Agustus',
                            'September' => 'September',
                            'October' => 'Oktober',
                            'November' => 'November',
                            'December' => 'Desember',
                        ];
                        echo date('d ') . $bulanIndo[$bulan] . date(' Y');
                    @endphp
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td align="center">Kepala Desa Mlese</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td align="center"><img src="assets/img/Approval.jpg" alt="Signature" height="140" width="360"></td>
            </tr>
        </table>
    </div>
</body>
</html>