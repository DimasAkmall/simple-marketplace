-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Bulan Mei 2023 pada 16.41
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin-dimas', '25d55ad283aa400af464c76d713c07ad', 'superadmin'),
(2, 'admin-gilang', '25d55ad283aa400af464c76d713c07ad', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `kodeBrg` varchar(10) NOT NULL,
  `namaBrg` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `desc` varchar(1000) NOT NULL,
  `kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `kodeBrg`, `namaBrg`, `harga`, `gambar`, `desc`, `kategori`) VALUES
(1, '001', 'Biskuat 60gr', 4500, 'biskuat-60gr.png', 'Biskuat, biskuit bernutrisi dengan rasa cokelat yang enak.', 5),
(2, '002', 'Chitato Barbeque 35gr', 5500, 'chitato-bbq-35gr.png', 'CHITATO snack potato terbuat dari kentang asli dengan potongan bergelombang yang hadir dalam rasa barbeque yang tebal dan kuat untuk memberikan pengalaman baru dalam setiap gigitannya. Keripik kentang Chitato diproses secara higienis dan modern tanpa\r\n', 5),
(3, '003', 'Chitato Rumput Laut 35gr', 5500, 'chitato-rl-35gr.png', '\"Chitato Lite, terbuat dari kentang asli pilihan yang diiris lebih tipis dan dipadu dengan bumbu berkualitas. Jadikan semua momen lebih ringan dengan Chitato Lite.', 5),
(4, '004', 'Chocholatos isi 24x8gr', 11000, 'chocholatos-24-8gr.png', 'Chocolatos merupakan inovasi baru dari GarudaFood dengan menghadirkan wafer stik yang lebih besar dan isi krim coklat yang lebih padat. Perpaduan antara wafer stik dan krim coklatnya memberikan citarasa serta kepuasan tersendiri dalam menikmati wafer stik, yang tidak dapat kita temui pada produk-produk wafer stik pada umumnya. Kombinasi wafer stik dan coklatnya merupakan perpaduan selera dan kualitas prima. Chocolatos, Mamma mia lezatos', 5),
(5, '005', 'Garuda Rosta 95gr', 9000, 'garuda-rosta-95gr.png', 'Rasa baru jagung bakar manis yang gurih dan lezat ini bisa kamu nikmatin tanpa bikin khawatir. Karena kacang Garuda Rosta yang dipanggang tidak digoreng. Membuat kualitas kacang panggang Rosta ngga cuma lezat, tapi tetap sehat dikonsumsi.', 5),
(6, '006', 'GoodTime isi 12x15gr', 13000, 'goodtime-12-15gr.png', 'Good time double chocochip kukis renyah dengan double chocochip yang enak.\r\n', 5),
(7, '007', 'Malkist Coklat 135gr', 7500, 'malkist-coklat-135gr.png', 'Roma malkist Belgian Style cokelat dapat menjadi pilihan kamu untuk menikmati waktu luang atau waktu kerja kamu jadi lebih asyik dan tidak membosankan bersama keluarga atau teman kerja. Selain itu, dapat juga kamu nikmati sebagai menu sarapan pagi.\r\n', 5),
(8, '008', 'Nabati Cheese 75gr', 6000, 'nabati-cheese-75gr.png', 'Richeese Nabati Wafer renyah dengan krim keju yang lezat. Nikmati kelezatan Wafer Krim Keju yang begitu terasa di setiap gigitan.', 5),
(9, '009', 'Oreo Original', 10000, 'oreo.png', 'Oreo biskuit sandwich coklat dengan krim vanila.\r\n', 5),
(10, '010', 'Oreo Black Pink', 10000, 'oreo-black-pink.png', 'Limited Edition! Oreo berkolaborasi dengan Blackpink! Temukan rasa spesial pink cookie dengan dark choco. Kumpulkan semua tanda tangannya.\r\n', 5),
(11, '011', 'Oreo Coklat', 10000, 'oreo-coklat.png', 'Oreo biskuit sandwich coklat dengan krim coklat.', 5),
(12, '012', 'AQUA 600ml', 3500, 'aqua-600ml.png', 'AQUA berasal dari sumber mata air yang terpilih dengan segala kemurnian dan kandungan mineral alami yang terpelihara.Dengan proses yang baik, memastikan higienis tetap terjaga.AQUA dikemas dengan proses higienis dalam beberapa ukuran.', 4),
(13, '013', 'AQUA 1500ml', 7000, 'aqua-1500ml.png', 'AQUA berasal dari sumber mata air yang terpilih dengan segala kemurnian dan kandungan mineral alami yang terpelihara.Dengan proses yang baik, memastikan higienis tetap terjaga.AQUA dikemas dengan proses higienis dalam beberapa ukuran.', 4),
(14, '014', 'CocaCola 390ml', 5000, 'cocacola-390ml.png', 'Minuman berkarbonasi bebas gula rasa kola', 4),
(15, '015', 'Fanta 390ml', 5000, 'fanta-390ml.png', 'Diperkenalkan pada tahun 1940, Fanta adalah merek tertua kedua The Coca-Cola Company dan merek terbesar kedua di luar Amerika Serikat. Fanta Orange adalah rasa utama dari Fanta. Hampir semua varian rasa buah ada dalam Fanta. Dikonsumsi lebih dari 130 juta kali setiap hari di seluruh dunia, konsumen menyukai Fanta karena rasa buahnya yang besar.\r\nDi Indonesia, Fanta identik dengan rasa strawberry dan mulai dipasarkan sejak tahun 1973. Konsumen Indonesia mencintai Fanta yang identik dengan keceriaan bersama teman dan keluarga, karena ciri khas merek Fanta yang selalu membawa keceritaan dengan warna yang cerah, rasa buah yang enak dan karbonasi yang menyegarkan.', 4),
(16, '016', 'Le Minerale 600ml', 3600, 'le-minerale-600ml.png', 'Le minerale air minum dalam kemasan. Air mineral pegunungan, dibotolkan langsung di sumbernya.', 4),
(17, '017', 'Sprite 390ml', 5000, 'sprite-390ml.png', 'Sprite minuman berperisa jeruk lemon dan lime berkarbonasi, kemasan pas harga pas.\r\n', 4),
(18, '018', 'Teh Pucuk Harum 500ml', 6500, 'teh-pucuk-harum-500ml.png', 'Teh pucuk harum minuman teh beraroma melati dibuat dengan pucuk daun teh pilihan dengan ekstrak melati yang menyegarkan.', 4),
(19, '019', 'Frestea Jasmine 500ml', 7000, 'frestea-jasmine-500ml.png', 'Frestea jasmine minuman teh siap minum rasa melatiyang unik dan asli dari yang berkualitas memberikan kesegaran dan rasa yang lebih enak.', 4),
(20, '020', 'Djarum 76 Kretek isi 12', 16000, 'djarum-76-12-kretek.png', 'DJARUM 76 Kretek 12, Terbuat dari tembakau dan cengkeh Indonesia pilihan. Diracik sempurna dengan saus khasnya. Memiliki aroma dan cita rasa tersendiri yang khas. Dibungkus dan dikemas dengan kemasan yang elegan.', 2),
(21, '021', 'Djarum Super isi 12', 18000, 'djarum-super-12.png', 'Djarum rokok filter bungkus 16\'s', 2),
(22, '022', 'Sampoerna Mild isi 12', 20000, 'sampoerna-mild-12.png', 'Sampoerna rokok filter mild merah bungkus 12\'s', 2),
(23, '023', 'Bodrex isi 20', 5500, 'bodrex-20.png', 'Bodrex mengandung parasetamol yang bekerja sebagai analgesik untuk meredakan sakit kepala, sakit gigi. Parasetamol juga bekerja sebagai antipiretik untuk menurunkan demam.', 6),
(24, '024', 'Diapet isi 4', 3000, 'diapet-4.png', 'Obat diare', 6),
(25, '025', 'Diapet isi 10', 7500, 'diapet-10.png', 'Obat diare', 6),
(26, '026', 'Panadol isi 10', 13000, 'panadol-10.png', 'Panadol Regular meredakan sakit kepala, sakit gigi, sakit pada otot, nyeri yang mengganggu dan menurunkan demam yang menyertai flu/influenza dan demam sesudah vaksinasi secara cepat dan efektif. Tersertifikasi Halal. Panadol mempunyai tolerabilitas yang baik sehingga dapat dikonsumsi untuk orang dengan gangguan lambung, jika diminum sesuai dosis dan aturan pakai.', 6),
(27, '027', 'Paramex isi 4', 3000, 'paramex-4.png', 'Paramex obat sakit kepala (4) strip', 6),
(28, '028', 'Promag isi 10', 14500, 'promag-10.png', 'PROMAG dalam bentuk tablet dalam blister modern dengan hydrotalcite bekerja cepat atasi sakit maag, menetralkan asam lambung dan melindungi lebih lama. Dengan Formula Hydrotalcite, Magnesium Hydroxide dan Simethicone bekerja cepat dan tahan lama mengatasi gejala sakit maag seperti perih, nyeri ulu hati, mual dan kembung.\r\n', 6),
(29, '029', 'Tolak Angin 5x15ml', 24000, 'tolak-angin-5sch-15ml.png', 'Membantu meringankan gejala flu, membantu meredakan gejala masuk angin, serta membantu memelihara daya tahan tubuh.', 6),
(30, '030', 'Bimoli 2L', 40000, 'Bimoli-2L.png', 'Bimoli dibuat dari kelapa sawit berkualitas. Warna kuning keemasan berasal dari beta karoten alami. Stabil panasnya. Matang luar dalam.', 1),
(31, '031', 'Bogasari Segitiga Biru 1kg', 10000, 'bogasari-segitiga-biru-1kg.png', 'Wheat Flour Premium Protein Sedang Terigu Serbaguna Aneka Makanan Pound Cake Martabak Vitamin A SEGITIGA BIRU PREMIUM 1 Kg, terigu serbaguna untuk membuat beraneka makanan seperti pound cake, brownies, martabak manis, muffin, pastel, kroket, risoles, dan lain-lain. Pound cake akan mengembang sempurna dengan crumb yang lembut. Martabak manis akan mengembang sempurna, lembut, bersarang, dan tidak cepat keras. Merupakan satu-satunya terigu yang mengandung vitamin A, vitamin B3, dan vitamin D3.', 1),
(32, '032', 'Garam Kapal 250gr', 3000, 'garam-kapal-250gr.png', 'Garam Putih Halus Cap Kapal - 250 Gram', 1),
(33, '033', 'Happy Sweet 1kg', 16000, 'happy-sweet-1kg.png', 'Gula pasir happy sweet 1kg adalah gula tebu petani nusantara', 1),
(34, '034', 'Sania 2L', 37000, 'sania-2L.png', 'Sania adalah minyak goreng premium yang diproduksi dengan beberapa tahap proses pemurnian dan penyaringan.\r\n', 1),
(35, '035', 'Telur isi 10', 22000, 'telur-10.png', 'telur ya telur pake nanya , btw telur sama ayam duluan mana hayooo', 1),
(36, '036', 'Rose Brand 500gr', 7000, 'rose-brand-500gr.png', 'Terbuat dari bahan ketan berkualitas, Diproses secara higenis, Cocok untuk bahan baku membuat semua jenis kue-kue tradisional atau hidangan lainnya', 1),
(37, '037', 'Indomie Goreng 80gr', 3000, 'indomie-goreng-80gr.png', 'Mi goreng yang lezat dan nikmat, terbuat dari bahan berkualitas dan rempah rempah terbaik.', 1),
(38, '038', 'Indomie Goreng Ayam Geprek 85gr', 3500, 'indomie-goreng-ayam-geprek-85gr.png', 'Mi goreng dengan rasa ayam geprek yang pas dilidah, terbuat dari bahan berkualitas dan rempah rempah terbaik.\r\n', 1),
(39, '039', 'Indomie Goreng Rendang 91gr', 3500, 'indomie-goreng-rendang-91gr.png', 'Mi goreng rasa rendang yang nikmat, terbuat dari bahan berkualitas dan rempah rempah terbaik.\r\n', 1),
(40, '040', 'Closeup 160gr', 20000, 'closeup-160gr.png', 'CloseUp dengan kandungan formulasi anti-bacterial mouthwash dan micro shine crystals untuk memberikan nafas segar hingga serta gigi putih', 3),
(41, '041', 'Pepsodent 225gr', 20500, 'pepsodent-225gr.png', 'PerlindunganMikro Kalsium Aktifmembantu memperbaiki* lubang kecil tak kasat mata, danPro-Fluoride Kompleksmelindungi gigi lebih lama.*) Mengacu pada aktivitas mengembalikan mineral yang hilang pada email gigi.', 3),
(42, '042', 'Sikat Gigi Formula 3', 26000, 'formula-3.png', 'Bulu sikat padat, efektif bersihkan gigi. Pembersih lidah untuk nafas lebih segar.', 3),
(43, '043', 'Sikat Gigi Pepsodent isi 3', 25000, 'pepsodent-3.png', 'sikat gigi dengan bulu sikat bergelombang yang membersihkan sela-sela gigi dengan baik dan mempunyai gagang sikat yang panjang & kuat', 3),
(44, '044', 'Headshoulders Cool Menthol 350ml', 45000, 'headshoulders-cool-menthol-350ml.png', 'Masih mengalami masalah ketombe dan gatal? Head & Shoulders Shampoo Anti Dandruff Menthol Dingin dengan formula tiga aksi baru, mampu membersihkan, melindungi, sekaligus melembabkan kulit kepala Anda. Merupakan sampo dengan sensasi dingin yang mampu menyegarkan kulit kepala, anti dandruf, dan mengatasi gatal di kulit kepala. Dengan formula menthol jadikan rambut serta kulit kepala terasa dingin dan bersih menyegarkan. Cocok untuk masalah ketombe dan kulit kepala gatal. Shampo ini membantu menghilangkan ketombe dan mencegahnya datang kembali', 3),
(45, '045', 'Pantene 210ml', 38000, 'pantene-210ml.png', 'PANTENE Shampoo Anti Dandruff merupakan Shampoo yang dapat digunakan untuk remaja dan dewasa agar kesehatan rambutnya tetap terjaga. Formulanya efektif untuk rambut rusak dan berketombe. Shampoo ini dapat menutrisi rambut hingga lapisan terdalam dan bebas dari bahan berbahaya. Selain itu, Shampoo ini dapat menjadikan rambut lebih indah berkilau. Berikan perawatan terbaik bagi rambut berketombe dengan PANTENE Shampoo Anti Dandruff untuk menjaga kulit kepala tetap sehat. Dapatkan 72 jam waktu rambut selembut sutra', 3),
(46, '046', 'Rejoice Rich Soft Smooth 340ml', 50000, 'rejoice-rich-soft-smooth-340ml.png', 'Shampo dengan formula ZPT, dapat membersihkan rambut dari ketombe, melembutkan rambut, dan menghilangkan rasa gatal di kulit kepala yang ditimbulkan ketombe. Rejoice Shampoo Anti Dandruf 3in1 merupakan sampo yang diformulasi untuk memberi 3 manfaat sekaligus. Mengandung ZPT yang ampuh mengatasi ketombe, juga diperkaya creambath essence yang memberikan kelembutan pada rambut sehingga rambut lembut dan mudah diatur. Kandungan mentolnya yang memberi sensasi dingin di kulit kepala mampu menghilangkan rasa gatal akibat ketombe. Tak hanya itu, Rejoice Shampoo Anti Ketombe 3in1 juga dapat melindungi rambut dari debu dan polusi yang akan menimbulkan kerusakan rambut.', 3),
(47, '047', 'Detol Original isi 5', 35000, 'detol-original-5.png', 'Dettol Invigorate adalah sabun antibakteri yang menggabungkan perlindungan terpercaya Dettol dengan harum mineral laut untuk kulit bersih, segar, dan terlindungi dari kuman penyebab bau badan.\r\n', 3),
(48, '048', 'Detol Cool isi 5', 35500, 'detol-cool-5.png', 'Sabun Mandi Cair Dettol ProFresh - Cool merupakan sabun cair anti bakteri untuk memberikan perlindungan keluarga anda setiap harinya dari kuman penyebab timbulnya bau badan serta memberikan sensasi mentol yang menyegarkan.\r\n', 3),
(49, '049', 'Garnier Acno Fight', 27500, 'garnier-acno-fight.png', 'Garnier Men Acno Fight Anti Acne Scrub In Foam merupakan pembersih wajah khusus bagi kaum pria yang mempunyai fungsi untuk menjaga kulit wajah Anda agar dapat tetap sehat dan terawat yang cocok bagi semua jenis kulit. Foam tersebut memiliki busa yang sangat banyak dan halus, agar efektif membersihkan kotoran yang terdapat di dalam pori-pori kulit Anda.', 3),
(50, '050', 'Garnier Oil Control Charcoal', 27500, 'garnier-oil-control-charchoal.png', 'Garnier Men Oil Control 3 in 1 Charcoal Black. 1.wash 2.scrub 3.mask tub 100ml\r\n', 3),
(51, '051', 'Garnier Wasabi', 27500, 'garnier-wasabi.png', 'Sabun pembersih wajah pria yang melawan bakteri penyebab jerawat dan mencerahkan wajah./nPembersih wajah inovatif dari Garnier yang membantu mencerahkan wajah dan dengan pemakaian teratur membantu mencegah timbulnya jerawat. Diperkaya dengan Ekstrak Wasabi yang alami dan lembut dan Salicylic Acid yang dikenal sebagai bahan anti bakteri./nFormulanya secara alami membantu mengurangi minyak berlebih, melawan jerawat, komedo/bintik hitam, dan membuat pori-pori tampak kecil.', 3),
(52, '052', 'Bolpoin Tripen Faber Castell', 4000, 'bolpoin-tripen-faber-castell.png', 'ballpoint 3\'s hitam pack.', 7),
(53, '053', 'Buku Tulis Boxy Kiky', 6000, 'buku-tulis-boxy-kiky.png', 'Buku Tulis Campuss merk AA isi 50 lembar\r\nMutu Kertas tebal.\r\nIsi 10 pcs / pak', 7),
(54, '054', 'Penghapus Faber Castell', 4500, 'penghapus-faber-castell.png', 'Penghapus Pensil Faber Castell Eraser Dust Free 7299 Hitam yang kami jual adalah penghapus bebas debu atau bebas bekas residu yang dihasilkan dari menghapus tulisan anda.', 7),
(55, '055', 'Pensil 2B Castell', 5000, 'pensil-2b-castell-2000.png', 'Pensil mewah dengan standar ujian dari Faber castel juaranya alat tulis.', 7),
(56, '056', 'Tipe-X Kenko', 7000, 'tipe-x-kenko.png', 'Correction Pen Memberikan solusi memperbaiki Tulisan yang salah dengan cepat\r\nRapi dan bersih', 7),
(57, '057', 'Attack Softener 800gr', 28000, 'attack-softener-800gr.png', 'Butiran konsentrat attack jauh lebih bertenaga, bekerja menyeluruh hingga ke serat kain yang sulit di jangkau.', 8),
(58, '058', 'Rinso 770gr', 27000, 'rinso-770gr.png', 'Deterjen bubuk', 8),
(59, '059', 'Sunlight 700ml', 15000, 'sunlight-700ml.png', 'Sunlight Jeruk Nipis 100 mampu menghilangkan lemak dengan kekuatan 100 jeruk nipis di tiap kemasannya, secara aktif mengangkat dan menghilangkan lemak membandel, dan juga membersihkan dengan cepat berkat teknologi baru Cepat Bilas.', 8),
(60, '060', 'Sunlight Botol 750ml', 18000, 'sunlight-botol-750ml.png', 'sama seperti biasanya namun kini hadir dengan siap diisi ulang dengan varian botol', 8),
(61, '061', 'Superpel Apple 770ml', 17500, 'superpel-apple-770ml.png', 'Lantai yang bersih dan harum tak hanya menjadi dambaan tapi juga dapat menjadi pemberi keceriaan bagi seluruh keluarga. Super Pell Pembersih Lantai Fresh Apple, cairan pembersih lantai dengan formula acti-shine technology yang tak hanya bekerja secara maksimal membersihkan kotoran pada lantai diseluruh ruangan rumah hingga besih dan mengkilau, tapi juga memberikan kesegaran dan kenyamanan tahan lama kepada seluruh keluarga dengan aroma wangi alami, segar dan khas dari ekstrak buah apel. Kandungan formula dalam Super Pell Pembersih Lantai Fresh Apple aktif dan efektif untuk membersihkan lantai rumah secara menyeluruh sehingga lantai menjadi berkilau bersih maksimal dengan wangi alami yang tahan lama. Momen indah bersama keluarga di lantai rumah menjadi lebih nyaman dan tak perlu khawatir akan kuman penyebab penyakit. Untuk merasakan nyamannya memiliki lantai yang bersih menyeluruh, dan wangi segar tahan lama, Setelah penggunaan.\r\n', 8),
(62, '062', 'Superpel Lemon 770ml', 17500, 'superpel-lemon-770ml.png', 'Lantai yang bersih dan harum tak hanya menjadi dambaan tapi juga dapat menjadi pemberi keceriaan bagi seluruh keluarga. Super Pell Pembersih Lantai Lemon Ginger, cairan pembersih lantai dengan formula acti-shine technology yang tak hanya bekerja secara maksimal membersihkan kotoran pada lantai diseluruh ruangan rumah hingga besih dan mengkilau, tapi juga memberikan kesegaran dan kenyamanan tahan lama kepada seluruh keluarga dengan aroma wangi alami dari ekstrak buah lemon dan kesegaran khas dari ekstrak jahe. Kandungan formula dalam Super Pell Pembersih Lantai Lemon Ginger aktif dan efektif untuk membersihkan lantai rumah secara menyeluruh sehingga lantai menjadi berkilau bersih maksimal dengan wangi alami yang tahan lama. Momen indah bersama keluarga di lantai rumah menjadi lebih nyaman dan tak perlu khawatir akan kuman penyebab penyakit. Untuk merasakan', 8),
(63, '063', 'Wipol 750ml', 20000, 'wipol-750ml.png', 'Karbol wangi dengan pine action, efektif membunuh kuman sekaligus memberikan keharuman khas cemara menjadikan ruangan harum dan segar lebih lama.\r\n', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `gambar`) VALUES
(1, 'Sembako', 'grocery.png'),
(2, 'Rokok', 'cigarettes.png'),
(3, 'Perlengkapan mandi', 'Soap.png'),
(4, 'Minuman', 'soft-drink.png'),
(5, 'Makanan ringan', 'snack.png'),
(6, 'Obat-obatan', 'pills.png'),
(7, 'Alat tulis', 'pencil-box.png'),
(8, 'Perlengkapan rumah tangga', 'cleaning.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id`, `id_user`, `id_barang`, `jumlah`) VALUES
(6, 3, 22, 1),
(7, 2, 38, 5),
(8, 2, 39, 5),
(9, 2, 37, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `idTransaksi` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `tglTransaksi` timestamp NOT NULL DEFAULT current_timestamp(),
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`idTransaksi`, `idUser`, `tglTransaksi`, `total`) VALUES
(1, 2, '2023-05-01 14:32:59', 55000),
(2, 1, '2023-05-01 14:34:17', 45500),
(3, 3, '2023-05-01 14:35:18', 52500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'riyohendry', '25d55ad283aa400af464c76d713c07ad'),
(2, 'dimasawp', '25d55ad283aa400af464c76d713c07ad'),
(3, 'gilangYayat', '1b041fe18e77a55a024484cfef3d3163');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori` (`kategori`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idTransaksi`),
  ADD KEY `idUser` (`idUser`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idTransaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `keranjang_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
