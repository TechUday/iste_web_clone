-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 05:43 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `displayupload`
--

-- --------------------------------------------------------

--
-- Table structure for table `imgupload`
--

CREATE TABLE `imgupload` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `Bio` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `imgupload`
--

INSERT INTO `imgupload` (`id`, `username`, `Bio`, `image`) VALUES
(14, 'tejapraneeth_2013', 'Teja Praneeth of 2013 batch, currently working as Senior Manager at Flipkart , Bangalore.\r\nLinkedIn : tejapraneeth, Facebook : praneethandme, Gmail : praneethandme@gmail.com.', 'uplaod/pic @1.jpg'),
(15, 'Rajiv_Nitish', 'Rajiv Nitish of 2015 batch, currently working as Outreach Manager at Dakshana Foundation.\r\nLinkedIn : rajiv nitish palagummi, Facebook : rajivnitish.palagummi, Insta : pvrnitish, Email : pvrnitish@gmail.com', 'uplaod/Nitish - Rajiv Nitish Palagummi.jpg'),
(16, 'somasekhar', 'somasekhar of 2015 batch, currently working as Hydraulic Engineer, Germany.\r\nLinkedIn : Somasekhar Singuluri, Gmail : sekhar.singuluri@gmail.com', 'uplaod/1600118462018 - Sekhar Singuluri.jpg'),
(17, 'harish_kale', 'Harish kale of 2015 batch, currently working as QA engineer, Bangalore.\r\nLinkedIn : harish kale, Gmail : Kharish91005@gmail.com', 'uplaod/DP - Harish Kale.jpg'),
(18, 'krishnapriya', 'Krishnapriya of 2015 batch, currently working as women protection secretary in sachivalayam, Amalapuram.\r\nGmail : krishnapriya381994@gmail.com', 'uplaod/Screenshot_2021-04-27-11-25-38-94 - krishna priya.jpg'),
(19, 'Phaneendra', 'Phaneendra of 2015 batch, currently doing MBA in finance, Gim GOA.\r\nLinkedIn : phaneendra veluguleti, Gmail : vphani51@gmail.com', 'uplaod/P_20200817_160934 - phaneendra veluguleti.jpg'),
(20, 'naveen_vanapalli', 'Naveen Vanapalli of 2016 batch, currently working as HR Executive at TCS.\r\nLinkedIn : Naveen babu Vanapalli, Gmail : 67naveen67@gmail.com', 'uplaod/IMG_20200801_224547_632 - naveen babu.jpg'),
(21, 'manohar_palla', 'Manohar Palla of 2016 batch, currently working as Senior software Engineer at Accenture, Hyderabad.\r\nLinkedIn : manohar palla, Gmail : manohar.palla007@gmail.com', 'uplaod/2018-10-20-17-21-32-592 - Manohar Palla.jpg'),
(22, 'rayyan_shariff', 'Rayyan Shariff of 2016 batch, currently working as Panchayat secretary, Denduluru.\r\nfacebook : rayyanshariff, insta : rayyanshariff, Gmail : rayyanshariff@gmail.com', 'uplaod/Webp.net-resizeimage - Rayyan shariff.jpg'),
(23, 'sai_ravi_teja', 'Sai Ravi Teja of 2016 batch, currently working as SAP CX Advisory Consultant, Bangalore.\r\nLinkedIn : ravi kunapuli, facebook : raviraising, Gmail : ravis15508@gmail.com', 'uplaod/IMG_20210103_172009_502 - sai ravi teja kunapuli.jpg'),
(24, 'gayatri_reddi', 'Gayatri Reddi of 2017 batch, currently working as Software Developer.\r\nLinkedIn : Gayatri Reddi, facebook : Gayatri Reddi, Gmail : reddi.gayatri15@gmail.com', 'uplaod/Screenshot_20210407-125944 - Reddi gayatri.png'),
(26, 'mohammad_basit', 'Mohammad Basit of 2017 batch, currently working as ETL developer at TCS, Hyderabad.\r\nLinkedIn : mohammad basit habibuddin, facebook : basit.srkr, Gmail : basit5533@gmail.com', 'uplaod/DSC_1207-01 (1) - Mohammad Basit Habibuddin.jpg'),
(27, 'sanjay_kolaparthi', 'Kolaparthi Sanjay of 2017 batch, currently working as Informatica Developer, Hyderabad.\r\nLinkedIn : sanjay kolaparthi, Gmail : kolaparthisanjay@gmail.com', 'uplaod/IMG_2766-01 - sanjay kolaparthi.jpeg'),
(28, 'raghuveer', 'Raghuveer of 2017 batch, currently working as Entrepreneur, Ahmedabad.\r\nLinkedIn : raghuveer chadalavada, Gmail : raghuveer.entrepreneur@gmail.com.', 'uplaod/IMG_20190621_001308 - Raghuveer Chadalavada.jpg'),
(29, 'krishna_akella', 'Krishna Akella of 2017 batch, currently working as 3D Animator, Hyderabad.\r\nLinkedIn : krishna akella, Insta : chryshnagram, Gmail : akellakrishna2@gmail.com', 'uplaod/13YD9YTNUQLfKyLtYB9K6Kyd - Krishna Akella.jpg'),
(30, 'narendra_tangudu', 'Narendra Tangudu of 2017 batch, currently working as Software Engineer, Pune.\r\nLinkedIn : narendra tangudu, Gmail : narendra.tangudu@gmail.com', 'uplaod/PNG image 2 - Narendra Tangudu.png'),
(31, 'sai_teja', 'Koppisetti Saiteja of 2017 batch, currently working as Automobile Design Engineer at Hyundai Motors, Hyderabad.\r\nLinkedIn : saiteja koppisetti, Insta : saitejakoppisetti, Gmail : saiteja21296@gmail.com', 'uplaod/IMG_3820 - koppisetti saiteja.jpg'),
(32, 'sai_sushmitha', 'Sai Sushmitha of 2018 batch, currently working as Member Technical.\r\nfacebook : Sushmitha Vulli , Gmail : sushmithavulli@gmail.com', 'uplaod/IMG_20210405_192042 - Sushmitha Vulli.jpg'),
(33, 'mounika', 'Mounika of 2018 batch, currently working as IOS developer at mindtree.\r\nLinkedIn : Mounika Sanka, Gmail : mounikalatha99@gmail.com', 'uplaod/BM_IMG_1591618281525 3 - Mounika Latha.jpg'),
(34, 'sai_teja_achanta', 'Sai Teja Achanta of 2018 batch, currently working as Software Employ.\r\ninsta : cal_me_siddd , Gmail : saiachanta38@gmail.com', 'uplaod/IMG_20190423_100249-01 - sai achanta.jpeg'),
(35, 'anirudh_kota', 'Anirudh kota of 2018 batch, currently working as Software Engineer.\r\nLinkedIn :  Anirudh Akhil, facebook : Anirudh Akhil, Gmail : anirudh05ksa@gmail.com', 'uplaod/anirudh_psp - Anirudh Akhil.jpg'),
(36, 'rama_krishna', 'Rama Krishna of 2018 batch, currently workig as Java Developer, Cleveland.\r\nLinkedIn : Rama Krishna pendurthi, Gmail : ramakrishnapendurthi@gmail.com', 'uplaod/BF112CA4-F085-4276-8F4C-3FF68EF38C14 - pendurthi ramakrishna.jpeg'),
(37, 'aneela', 'Aneela Sakilay of 2018 batch, currently working as Writer and Media Analyst, Hyderabad.\r\nLinkedIn : Aneela Sakilay, Gmail : aneela9120@gmail.com', 'uplaod/Screenshot_20210415_090833 - Aneela Sakiley.jpg'),
(40, 'charan_veluri', 'Charan Veluri of 2018 batch, currently doing M.Tech in Control and Industrial Automation.\r\nLinkedIn : Charan veluri, facebook : Charan Veluri, Gmail : charanveluri2896@gmail.com', 'uplaod/IMG_20210427_154207 - charan veluri.jpg'),
(41, 'nightingale', 'Florence Nightingale of 2018 batch, currently studying ECE at Linares, Spain.\r\nLinkedIn : florence anem, insta : floryanem, Gmail : florencenightingalea08@gmail.com', 'uplaod/1616345378872 - florence nightingale a.jpg'),
(42, 'bala_yashwanth', 'Bala Yashwanth of 2018 batch, currently working at TCS, Hyderabad.\r\nLinkedIn : Bala Yashwanth Paila, Gmail : balu.4452.2k7@gmail.com', 'uplaod/pic - Bala Yashwanth.JPG'),
(46, 'anand_kumar', 'Anand Kumar of 2019 batch, currently working as Analyst in Tata Consultancy Services.\r\nLinkedIn : anand kumar, Gmail : anandrjy121@gmail.com', 'uplaod/20200205_075207 - anand kumar.jpg'),
(47, 'vennela', 'Vennela Tekkam of 2019 batch, currently working as Developer at Tata Consultancy Services.\r\ninsta : vennela.tekkam, Gmail : vennelatekkam123@gmail.com', 'uplaod/Screenshot_20210406-223110 - Vennela.png'),
(48, 'himavamsi', 'Himavamsi Kancherla of 2019 batch, currently working as system engineer at TCS.\r\nLinkedIn : hima vamsi, Outlook : himavamsi98@outlook.com', 'uplaod/IMG_20200619_153453_952 - Vamsi Hima.jpg'),
(49, 'kiranmai', 'Kiranmai Yaganti of 2019 batch, currently working as assistant system engineer, TCS.\r\nLinkedIn : Kiranmai Yaganti, facebook : Kiranmai yaganti, Gmail : kiranmai.yaganti@gmail.com', 'uplaod/20210406_225810 - kiranmai yaganti.jpg'),
(50, 'apoorva', 'Apoorva Padavala of 2019 batch, currently working as system engineer at TCS, Hyderabad.\r\nLinkedIn : Notany, Gmail : apurva.sana@gmail.com', 'uplaod/Snapchat-2080556320-01 - Apoorva.jpg'),
(51, 'revanth', 'Revanth of 2019 batch, currently working as Assistant Engineer, Hyderabad.\r\nLinkedIn : Revanth konakalla, Gmail : revankonakalla@gmail.com', 'uplaod/IMG_20201224_144142 - revanth konakalla.jpg'),
(52, 'sowmaya_sri', 'Sowmya Sri Narina of 2019 batch, currently working as Developer at TCS, Hyderabad.\r\nLinkedIn : Narina Sowmya sri, Insta : Sowmyasri.Narina, Gmail: sowmya09cse@gmail.com', 'uplaod/Snapchat-1187609201 - SOWMYA SRI NARINA.jpg'),
(53, 'Bhargav_varma', 'Bhargav Varma of 2019 batch, currently working as Research Engineer in Hyundai Motor India Engineering PVT LTD, Hyderadab.\r\nLinkedIn : Msjjdj, Insta : bhargav_113, Gmail : bhargavvarma1234@gmail.com', 'uplaod/BeautyPlus_20210407182239795_save - Bhargav varma.jpg'),
(54, 'lahari', 'Lahari Padala of 2019 batch, currently working as Automation developer in TCS, Hyderabad.\r\nLinkedIn : Padala lahari, Gmail : laharipadala157@gmail.com', 'uplaod/IMG_20200708_211735_843 - lahari padala.jpg'),
(55, 'sai_ganesh', 'Sai Ganesh Madduri of 2019 batch, currently working as Digital Assistant in Grama Sachivalayam, Duvva.\r\nLinkedIn : M S GANESH, Insta : msg_msd, Gmail : msgmsd04@gmail.com', 'uplaod/Screenshot_20210411-200907_2 - sai ganesh.png'),
(56, 'mallula_dinesh', 'Mallula Dinesh of 2019 batch, currently working as Project engineer, Banglore.\r\nLinkedIn : DineshMallula, Facebook : Dineshmallula, Gmail : dineshmallula@gmail.com', 'uplaod/IMG_20200429_190053 - DINESH MALLULA.jpg'),
(57, 'uma_mahesh', 'Uppu Uma Mahesh of 2019 batch, currently working as Assistant System Engineer in TCS, Hyderabad.\r\nLinkedIn : Uma mahesh uppu, FaceBook : Uma mahesh loveland, Instagram : Mahesh mysterious, Gmail : umamaheshuppu19@gmail.com', 'uplaod/Screenshot_20210412-203108_Photos - uma mahesh.jpg'),
(58, 'venkata_mutyalu', 'Amballa Venkata Mutyalu Naidu of 2019 batch, currently working as Systems Engineer, Hyderabad.\r\nLinkedIn : amballa-venkata-mutyalu-naidu-5438b0138, Gmail : mutyaluamballa@gmail.com', 'uplaod/IMG_20210418_083635__01 - venkata mutyalu naidu amballa.jpg'),
(59, 'sai_kiran', 'Sai Kiran Kadiyala of 2019 batch, currently working as Software Engineer, Coimbatore.\r\nLinkedIn : kadiyalasaikiran , Gmail : mutyaluamballa@gmail.com', 'uplaod/sai - Sai Kiran Kadiyala.jpg'),
(60, 'manikanta', 'Manikanta Yarramsetti of 2020 batch, currently working as Software Engineer.\r\nFacebook : Manikanta naidu yarramsetti, Gmail : maninaidu7893887535@gmail.com', 'uplaod/IMG_1649 - mani naidu11.jpg'),
(61, 'fareed', 'Fareed Kalidindi of 2020 batch, currently working as amenities secretary at ward sachivalayam.\r\nGmail : fareedfarru968@gmail.com', 'uplaod/Fareed - Fareed Farru.JPG'),
(62, 'ajesh_babu', 'Ajesh Babu of 2020 batch, currently working at DXC Technology.\r\nGmail : ajeshbabu313@gmail.com', 'uplaod/56C2A4787D634530B385FF67EF7D3543 - Ajesh Babu Gadde.jpg'),
(63, 'neelasri', 'Neelasri Vissamsetti of 2020 batch, currently working as frontend developer.\r\nLinkedIn : Neelasri Vissamsetti, facebook : Neelasri Vissamsetti, Gmail : neelasrivissamsetti123@gmail.com', 'uplaod/500074100810_5848 - Neelasri Vissamsetti.jpg'),
(64, 'seshu_kovvuri', 'Seshu Kovvuri of 2020 batch, currently working as employee at TCS, Hyderabad.\r\nLinkedIn : seshukovvuri, Gmail : seshukovvuriend@gmail.com', 'uplaod/2018-07-12-18-39-02-680 - seshu kovvuri.jpg'),
(65, 'girish_mudunuri', 'Girish Mudunuri of 2020 batch, currently working as Agri-preneur, Rajahmundry.\r\nGmail : mudunurigirish@gmail.com', 'uplaod/myimage.png'),
(66, 'jeelani_shaik', 'Abdul Haq Khadhar Jeelani of 2020 batch, currently working as Software Engineer at NCR corporation, Hyderabad.\r\nLinkedIn : Jeelani Shaik, insta : jeelani_sheik, Gmail : a.h.k.jeelani@gmail.com', 'uplaod/IMG_20210410_174520 - Jeelani Shaik.jpg'),
(67, 'eswar_tanniru', 'Eswar Tanniru of 2020 batch.\r\nLinkedIn : Eswar Tanniru, facebook : Eswar Tanniru, Gmail : eeswar301@gmail.com', 'uplaod/FB_IMG_1618066606360 - Eswar Tanniru.jpg'),
(68, 'mohan_reddy', 'Surya Mohan Reddy of 2020 batch, currently working as Technical architect, Hyderabad.\r\nLinkedIn : surya mohan reddy, facebook : surya mohan, insta : mr.graduate, Gmail : suryamohanreddy.123@gmail.com', 'uplaod/IMG_20200813_163644_392 - surya mohan.jpg'),
(69, 'jeji_bhargav', 'Jeji Bhargav of 2020 batch, currently working as Application Development Associate, Hyderabad.\r\nfacebook : Jeji Bhargav ch, Gmail : balu.jeji111@gmail.com', 'uplaod/IMG_7836-01 - Tejvenkat cheera.jpeg'),
(70, 'krishna_katta', 'Krishna chaithanya katta of 2020 batch currently working as assistant system engineer. \r\nLinkedIn : chaitanya katta, Insta: kc_since_1998, Gmail: kschaitanya.katta98@gmail.com', 'uplaod/20210411_100104 - chaitanya katta.jpg'),
(71, 'kavya_kompella', 'Kavya kompella of 2020 batch currently working software developer.\r\nGmail: kavyakompella@gmail.com', 'uplaod/1604816088927-d07273cd-fcb7-4fef-b09d-813d3c4a4f46_ - Kompella Kavya.jpg'),
(72, 'jaya_sandeep', 'Jaya sandeep Bathina of 2020 batch currently working as software engineer in TCS.\r\nLinkedIn : jaya sandeep bathina, Gmail: sandeep.bathina7@gmail.com', 'uplaod/CDS image - sandeep bathina.jpg'),
(73, 'renuka', 'Nukala renuka of 2020 batch currently working as software eengineer.\r\nLinkedIn : Renuka Nukala, Gmail: renuka.nukala1@gmail.com', 'uplaod/DB212C0F-653B-4795-9E81-85EBB0FD4212 - renuka nukala.jpeg'),
(74, 'durga_bhavani', 'Kattan naga durga bhavani of 2020 batch currently working in TCS.\r\ninsta : bhavani_katta, Gmail: kattanagadurgabhavani2899@gmail.com', 'uplaod/PicsArt_04-11-01.50.23 - nagadurgabhavani katta.jpg'),
(75, 'srikanth', 'Srikanth goliapalli of 2020 batch currently working as TCS- assistant system engineer .\r\nfacebook : srikanth smarty, insta : srikanth, Gmail: srikanthgollapalli2703@gmail.com', 'uplaod/IMG_20210302_100545.jpg'),
(76, 'rama_teja', 'Ram sai tejaof 2020 batch.\r\ninsta : _._._ram_._, Gmail: ramteja8535@gamil.com', 'uplaod/aa - Ram Tej.jpg'),
(77, 'aditya_ayyagari', 'Aditya ayyagariof 2020 batch currently working as competency developer. \r\nGmail: aditya21298@gmail.com', 'uplaod/IMG_20210107_073144_2__01 - ayyagari aditya.jpg'),
(78, 'swaroop', 'swaroop kosuriof 2020 batch currently working as software engineer in wipro and graphic designer. \r\nLinkedIn : Aditya Ayyagari, Gmail: swaroopkosuri.9@gmail.com', 'uplaod/PIC - Swaroop kosuri.jpg'),
(79, 'harini', 'Harini rudraraju of 2020 batch. \r\ninsta : mr_swaroop_, Gmail: rudrrarajuharini.11@gamil.com', 'uplaod/WhatsApp Image 2021-04-12 at 10.18.06 AM.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imgupload`
--
ALTER TABLE `imgupload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imgupload`
--
ALTER TABLE `imgupload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
