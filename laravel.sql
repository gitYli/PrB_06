-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2024 at 01:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Client_name` varchar(255) NOT NULL,
  `Client_img` varchar(255) NOT NULL,
  `Client_description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `Client_name`, `Client_img`, `Client_description`, `created_at`, `updated_at`) VALUES
(1, 'مستشفى بريدة المركزي', 'Date(202408141240)-Client(مستشفى بريدة المركزي).jpg', 'صرح طبي عريق بالقصيم منطقة بريده أنجز مستشفى بريدة المركزي أحد مكونات تجمع القصيم الصحي , أكثر من 12 ألف عملية جراحية حتى نهاية الربع الثالث \" يناير- سبتمبر\" خلال 9 أشهر ، من العام الحالي 2023م ، توزعت على مختلف الأقسام بالمستشفى', '2024-08-14 09:40:38', '2024-08-14 09:40:38'),
(2, 'اركال للاستشارات الهندسية', 'Date(202408141242)-Client(اركال للاستشارات الهندسية).jpg', 'أركال للإستشارات الهندسيه المتخصص في تصميم المخططات المعماريه بأحدث الأساليب العصريه وتصميم المخططات الإنشائيه تماشيا مع الأكواد العالميه بالإضافة لجميع الأعمال المساحيه والكروكيات التنظيميه وأعمال مكافحة الحريق والأمن والسلامه.', '2024-08-14 09:42:19', '2024-08-14 09:42:19'),
(3, 'نادي الرائد الرياضي', 'Date(202408141244)-Client(نادي الرائد الرياضي).jpg', 'رؤيتنا أن نكون ناديًا رائدًا يعزز النمو المستدام في المجال الرياضي محلياً ودولياً ورسالتنا توفير بيئة رياضية محفّزة في مختلف الألعاب الرياضية، وخلق بيئة جاذبة للاستثمار، و تفعيل المسؤولية الاجتماعية، وتعزيز الإستدامة المهنية والمالية وذلك لتحقيق تطلعات الشركاء والتوجهات المستقبلية للمملكة', '2024-08-14 09:44:18', '2024-08-14 09:44:18'),
(4, 'مخابز وحلويات الأرياف', 'Date(202408141245)-Client(مخابز وحلويات الأرياف).jpg', 'مخابز وحلويات الأرياف.. 40 عاماً من التميز والنجاح 11 فرعاً حول المملكة تقدم أفضل المنتجات\r\nبدأت قصة شركة مخابر وحلويات الأرياف عام 1985 ميلادي على يد المؤسس رجل الأعمال فهد المحيميد، من حلم إلى كيان عريق يملك خبرة ممتدة ومحفوفة بالعراقة والأصالة، كانت هذه العلامة التجارية شريكة في الكثير من اللحظات السعيدة للمجتمع مما جعل لهذه العلامة ولاء عاليا من قبل عملائها، حتى أصبحت لا تكتمل الأفراح لسنوات طويلة إلا بصحبة منتجات مخابز وحلويات الأرياف، وكان لدى المؤسس الأستاذ فهد المحيميد بعد نظر في استثماره، حيث حرص على أن لا يخدم قطاعاً واحداً فقط، بل قدم منتجات نوعية في قطاعات متعددة مثل:\r\n* الحلويات الشرقية من الكنافة والبقلاوة وغيرها.\r\n* الحلويات الغربية من الكيكات الفاخرة، والكثير من الوصفات المبتكرة والمستوحاة من المطبخ الأوروبي وغيرها.\r\n* الشوكولاتة الفاخرة بأعلى مستوى وألذ حشوة.\r\n* المعجنات والمقليات الطازجة، والمخبوزات التي هي خيار دائم لأصحاب المنازل.', '2024-08-14 09:45:40', '2024-08-14 09:45:40'),
(5, 'النادي العربي', 'Date(202408141246)-Client(النادي العربي).jpg', 'النادي العربي الرياضي بعنيزة, في محافظة عنيزة بمنطقة القصيم وسط المملكة العربية السعودية تأسس سنة 1958, ويحمل النادي شعارا باللون الأحمر والأبيض. يُلقب النادي العربي بفارس عنيزة، وهو نادي رياضي يضم العديد من الألعاب الرياضية أبرزها كرة القدم وكرة اليد وكرة السلة. ويقع مقر النادي في محافظة عنيزة بمنطقة القصيم', '2024-08-14 09:46:19', '2024-08-14 09:46:19'),
(6, 'نادي الصقر', 'Date(202408141247)-Client(نادي الصقر).jpg', 'تاسس نادي الصقر عام 1401هـ على يد مجموعة من اهالي مركز البصر وحينها تم ترشيح الاستاذ عبد العزيز بن عبد الرحمن السويد كاول رئيس للنادي, ثم تعاقب على ادارة النادي احد عشر رئيسا كان اخرهم الرئيس الحالي الاستاذ فهد بن عبد العزيز المحيميد.حقق النادي اول بطولاته على مستوى منطقة القصيم العام 1432هـ وفي العام 1442هـ حقق النادي ذات البطولة للمرة الثانية . وفي نفس العام حقق نادي الصقر تاج بطولاتة : درع المملكة العربية السعودية الاندية الدرجة الثالثة, بقيادة رئيس النادي الاستاذ فهد بن عبدالعزيز المحيميد, وعلى اثرها تأهل لاول مرة في تاريخه لدوري الدرجة الثانية لكرة القدم .', '2024-08-14 09:47:02', '2024-08-14 09:47:02'),
(7, 'نادي السر', 'Date(202408141247)-Client(نادي السر).jpg', 'نسعى بنادي السر الرياضي للتميز الرياضي والإداري عبر عمل مؤسسي لتحقيق أهدافنا وطموحاتنا التي تلبي تطلعات أصحاب المصلحة.\r\nوأن نكون متميزين في مختلف المجالات الرياضية ونموذجاً في التطوير المؤسسي\r\nالتميز روح الفريق الاستدامة الشراكة الشفافية التمكين\r\nولتحقيق التميز المؤسسي تحسين المنافسة الرياضية تعزيز الاستدامة المالية زيادة مشجعي النادي تحسين البنية تفعيل التكامل و الشراكات المجتمعية', '2024-08-14 09:47:23', '2024-08-14 09:47:23'),
(8, 'نادي التقدم', 'Date(202408141247)-Client(نادي التقدم).jpg', 'كانت بدايات النادي بسيطة باجتهادات ألهالي المذنب في عام 1968م، حيث تولى رئاسته إدارته بداح البداح - رحمه هللا تعالى -حتى جاءت الموافقة الكريمة على اعتماد نادي التقدم الرياضي في محافظة المذنب لممارسة كافة أنشطته الرياضية والثقافية واالجتماعية عام 1972 م ويتولى رئاسة مجلس إدارته عثمان بن محمد الدخيل - رحمه الله تعالى - وتتعاقب بعده اإلدارات لوقتنا الحالي.', '2024-08-14 09:47:47', '2024-08-14 09:47:47'),
(9, 'حاضنة الجمعيات', 'Date(202408141248)-Client(حاضنة الجمعيات).jpg', 'حاضنة للجمعيات الأهلية الناشئة هدفها دراسة الاحتياجات بمنطقة القصيم ودعم الافكار ورعايتها ودعم الجمعيات من خلال سبل الاستدامة المالية وتنفيذ افكارها، وحل مشكلة الصعوبات والعوائق التي تواجهها، وكيفية حلها ، ومعرفة الاحتياجات بهدف مساعدتها لتأسيس هذه الجمعية.', '2024-08-14 09:48:13', '2024-08-14 09:48:13'),
(10, 'كليات عنيزة', 'Date(202408141248)-Client(كليات عنيزة).jpg', 'تعد كليات عنيزة من الكليات الناشئة في المملكة؛ إذ انطلقت مسيرتها في العام الجامعي 1437/1436 ه بدعم سخي من حكومة خادم الحرمين الشريفين الملك سلمان بن عبدالعزيز آل سعود، وسمو ولي عهده الأمين، حفظهما الله، ورعاية كريمة من وزارة التعليم، تحقيقا للتوجهات المستقبلية للمملكة في مجال التعليم، والبحث العلمي؛ لتوفير تعليم متميز لأبناء المملكة وبناتها في منطقة القصيم', '2024-08-14 09:48:58', '2024-08-14 09:48:58'),
(11, 'جمعية تجهيز', 'Date(202408141249)-Client(جمعية تجهيز).jpg', 'جمعية خيرية تهتم بشؤون المسلم بعد موته، وتوعية المجتمع بأحكام الجنائز من خلال تقديم عمل خيري متقن للمجتمع من خلال الاهتمام برعاية شؤون الموتى، تجهيزا، وتكفينا، ودفنا، وتدريب وتأهيل المغسلين، وتوعية المجتمع بالمفهوم الشرعي للتعامل مع الجنائز.', '2024-08-14 09:49:32', '2024-08-14 09:49:32'),
(12, 'مكتب المحامي عبدالرحمن الجمعة', 'Date(202408141250)-Client(مكتب المحامي عبدالرحمن الجمعة).jpg', 'مكتب عبدالرحمن محمد الجمعة محامون ومستشارون وموثقون هو مكتب مرخص له بمزاولة المحاماة بموجب ترخيص المحاماة رقم 39389 وتاريخ 1/7/1439 وترخيص التوثيق رقم 1767 /40 وتاريخ 1/9/1440هـ الصادرين من وزارة العدل بالمملكة العربية السعودية', '2024-08-14 09:50:09', '2024-08-14 09:50:09'),
(13, 'مكتب القصيم للزواج', 'Date(202408141250)-Client(مكتب القصيم للزواج).jpg', 'مكتب القصيم للزواج القصيم بريده حي السالميه شرق مسجد الجارالله الجامع المكتب له حوالي 16سنه زوج كثير من الرجال على مستوى المملكه دخولك وتعرفك بالمكتب انت بالطريق الصحيح وانتبه لنفسك من المتطفلين على الزواج في برامج التواصل الذينا ليسو مختصين بالزواج وإنما هدفهم اخذ أموال الناس بالباطل المكتب معروف لدى الجميع ومنهم الجهات المختصه .', '2024-08-14 09:50:35', '2024-08-14 09:50:35');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `comment`, `created_at`, `updated_at`) VALUES
(22, 'أحمد العلي', 'ahmad.ali@example.com', 'مرحبا، أود الاستفسار عن خدماتكم المتنوعة. لقد سمعت عنكم الكثير من الإشادات وأريد معرفة المزيد عن كيفية الاستفادة من خدماتكم. هل يمكنكم تزويدي بمزيد من المعلومات حول العروض الحالية وأسعاركم؟ شكراً جزيلاً.', '2024-08-15 03:01:09', '2024-08-15 03:01:09'),
(23, 'فاطمة', 'fatima.zoha@example.com', 'السلام عليكم، أحتاج معلومات إضافية عن المنتج الذي عرضتموه مؤخراً. قرأت عن خصائصه وأريد معرفة المزيد عن تفاصيل التوصيل، فترة الضمان، وطرق الدفع المتاحة. أرجو الرد بأقرب وقت ممكن. شكراً.', '2024-08-15 03:01:44', '2024-08-15 03:01:44'),
(24, 'يوسف القحطاني', 'yousef.alkhatani@example.com', 'أهلاً، أريد معرفة أسعار خدماتكم وكيفية الاشتراك في البرامج التي تقدمونها. كما أود أن أستفسر عن المدة الزمنية اللازمة للحصول على النتائج المتوقعة. يرجى توضيح كافة التفاصيل المتعلقة بالتسجيل والجدول الزمني.', '2024-08-15 03:02:14', '2024-08-15 03:02:14'),
(25, 'مريم محمد', 'maryam.mohammed@example.com', 'مرحباً، أحتاج مساعدة في اختيار الخدمة المناسبة لاحتياجاتي. أنا في حيرة من أمري بين عدة خيارات وأرغب في استشارة أحد المختصين لديكم لمساعدتي في اتخاذ القرار الصحيح. هل يمكن تحديد موعد لمكالمة أو اجتماع لمناقشة الخيارات المتاحة؟', '2024-08-15 03:02:41', '2024-08-15 03:02:41'),
(26, 'خالد السعيد', 'khaled.alsaeed@example.com', 'السلام عليكم، لدي استفسار حول كيفية التسجيل في الدورة التدريبية التي تقدمونها. أريد معرفة تفاصيل المواعيد، المتطلبات، ومحتوى الدورة. كما أود معرفة تكلفة التسجيل وما إذا كان هناك خصومات متاحة.', '2024-08-15 03:03:02', '2024-08-15 03:03:02'),
(27, 'هالة عبد الله', 'hala.abdallah@example.com', 'مرحبا، أرجو تزويدي بمعلومات حول المواعيد المتاحة لحجز استشارة شخصية. أحتاج لمساعدة في موضوع محدد وأرغب في تحديد موعد يناسبني. يرجى توضيح كيفية الحجز والخطوات المطلوبة.', '2024-08-15 03:04:17', '2024-08-15 03:04:17'),
(28, 'سامي العابد', 'sami.alaabid@example.com', 'أهلاً، أود الاستفسار عن العروض الحالية التي تقدمونها. قرأت عن بعض العروض الممتازة على موقعكم وأريد التأكد من التفاصيل، مثل التواريخ، الأسعار، والشروط. كما أود معرفة كيفية الاستفادة منها.', '2024-08-15 03:04:36', '2024-08-15 03:04:36'),
(29, 'نجلاء الأحمد', 'naglaa.alahmad@example.com', 'السلام عليكم، أحتاج إلى توضيحات حول خطة الاشتراك في الخدمة التي تقدمونها. أريد معرفة تفاصيل الخطط المتاحة، الميزات التي تشملها كل خطة، وأسعارها. أرجو أيضاً توضيح كيفية التبديل بين الخطط إذا لزم الأمر.', '2024-08-15 03:04:55', '2024-08-15 03:04:55'),
(30, 'عبد الرحمن الجبالي', 'abdurrahman.aljubaili@example.com', 'مرحبا، أحتاج لمساعدة بشأن مشكلة في الطلب الذي قمت به مؤخراً. واجهت بعض الصعوبات في إتمام عملية الدفع وأريد التأكد من حالة الطلب والمدة المتوقعة للتسليم. يرجى تزويدي بكافة التفاصيل اللازمة لحل هذه المشكلة.', '2024-08-15 03:05:09', '2024-08-15 03:05:09'),
(31, 'ليلى النجار', 'layla.elnaggar@example.com', 'أهلاً، أود معرفة المزيد عن الخيارات المتاحة بالنسبة للخدمات التي تقدمونها. لدي بعض الأسئلة حول كيفية تخصيص الخدمة وفقاً لاحتياجاتي الخاصة وأريد استشارة بشأن أفضل الخيارات المتاحة. أرجو الرد في أقرب وقت ممكن لتنسيق موعد لمناقشة التفاصيل.', '2024-08-15 03:05:26', '2024-08-15 03:05:26');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(14, '0001_01_01_000000_create_users_table', 1),
(15, '0001_01_01_000001_create_cache_table', 1),
(16, '0001_01_01_000002_create_jobs_table', 1),
(17, '2024_08_08_062834_create_contact_table', 1),
(18, '2024_08_12_122054_create_services_table', 2),
(19, '2024_08_14_114908_create_clients_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Services_name` varchar(255) NOT NULL,
  `Services_img` varchar(255) NOT NULL,
  `Services_description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `Services_name`, `Services_img`, `Services_description`, `created_at`, `updated_at`) VALUES
(16, 'البرمجة من الصفر', 'Date(202408131716)-Service(البرمجة من الصفر).jpg', 'نقوم بتحويل فكرتك إلى موقع إلكتروني او تطبيق جوال مع سكريبت مبرمج من الصفر', '2024-08-13 14:16:00', '2024-08-13 14:16:00'),
(17, 'سكريبت الجمعيات الخيرية', 'Date(202408131716)-Service(سكريبت الجمعيات الخيرية).jpg', 'سكريبت متكامل لمواقع الجمعيات الخيريه وفق ضوابط المركز السعودي للحوكمة', '2024-08-13 14:16:39', '2024-08-13 14:16:39'),
(18, 'برنامج قمة للنداء الآلي', 'Date(202408131724)-Service(برنامج قمة للنداء الآلي).jpg', 'هو نظام تبليغ عن الحالات الطارئه للمنشآت الصحية أو غيرها من الأماكن التي تحتاج سرعة إستجابة يتم النداء عن طريق :\r\n* السماعات الداخلية للمنشأة\r\n* الإتصال المباشر بالفريق المناوب\r\n* الرسائل النصية\r\nمع إماكنية التعديل الكامل في شفرات نداء الطوارئ', '2024-08-13 14:24:19', '2024-08-13 14:24:19'),
(19, 'برنامج قمة لنقاط البيع', 'Date(202408131725)-Service(برنامج قمة لنقاط البيع).jpg', '* لا يحتاج جــــــهاز بمواصفات عاليه\r\n* يعمل على الجوال\r\n* قاعدة بيانات محمية مرفوعة على الشبكة\r\n* نسخ احتياطي كل 24 ساعه', '2024-08-13 14:25:21', '2024-08-13 14:25:21'),
(20, 'منصة بانوراما المتكاملة للاندية الرياضيه', 'Date(202408132142)-Service(منصة بانوراما المتكاملة للاندية الرياضيه).jpg', 'تقدم بانوراما القصيم للبرمجة منصة متكاملة لادارة الانديه الرياضيه تشتمل على الآتي :\r\n* موقع الكتروني\r\n* تطبيقين جوال للموقع ايفون و اندرويد\r\n* متجر الكتروني\r\n* تطبيقين جوال للمتجر ايفون و اندرويد\r\n* نظام المراسلات الالكترونيه\r\n* منصة تذاكر', '2024-08-13 18:42:17', '2024-08-13 18:42:17'),
(21, 'نظام قمة للمحاسبة', 'Date(202408132212)-Service(نظام قمة للمحاسبة).jpg', 'هو نظام يمكن مكاتب المحاسبه من ادارة جميع اعمالها مثل :\r\n* الحسابات\r\n* القيود اليوميه\r\n* ميزان المراجعه\r\n* القوائم الماليه\r\nوغيرها من المهام المحاسبيه', '2024-08-13 19:12:26', '2024-08-13 19:12:26'),
(22, 'نظام قمة للمحاماه', 'Date(202408132213)-Service(نظام قمة للمحاماه).jpg', 'هو نظام يمكن مكاتب المحاماه من ادارة جميع اعمالها مثل :\r\n* تقديم الدعاوي\r\n* ادراة المحاميين و توكيل القضايا لهم\r\n* خط سير لمتابعة كل قضيه', '2024-08-13 19:13:00', '2024-08-13 19:13:00'),
(23, 'منصة بانوراما لإدارة المشاريع الهندسية', 'Date(202408132214)-Service(منصة بانوراما لإدارة المشاريع الهندسية).jpg', 'تقدم بانوراما القصيم للبرمجه منصة متكاملة لإدارة المكاتب الهندسيه الكبيره تشتمل على الآتي :\r\n* خط سير كامل للمشاريع الهندسية بكامل تفاصيلها\r\n* ادارة الموظفين و اجازاتهم و رواتبهم واقاماتهم\r\n* نظام اشعارات مخصص لكل بند من البنود اعلاه\r\n* ادارة السجلات و تراخيص المحلات\r\n* ادارة الموادر البشريه\r\n* ادارة متكامله لسيارات المكتب الهندسي', '2024-08-13 19:14:46', '2024-08-13 19:14:46');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1B9ztgmN8Zo8vL7T0AGom8blvzMJpmnrvhYjoNWH', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo0OntzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJfdG9rZW4iO3M6NDA6InY3NGtKeEp2Ynkzd3Q2aThKUkV6VWlUd01tS0M2bDE0d3hENWNIRHQiO3M6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1723775183),
('71m6xccSQgaYBRipxT6x9cFgDVjKXZbgzQbhWsw9', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVjFIQWtyTHA0REZDMmx4dktmOWdWM1g4QnBsSGRpT1REV3RNN2piVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1723699661),
('Ar4pd5VYaKBtXGjPrTKiWAsrDyPml4EtcVDRpw9z', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQk93VWd6bzJ1eHZPRHZYcW1JTzNyZVpDR1FoR0RQMVRRNTVKRG5DMSI7czo3OiJzdWNjZXNzIjtzOjI5OiJZb3UgYXJlIG5vdCBhbGxvd2VkIHRvIGFjY2VzcyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjE6e2k6MDtzOjc6InN1Y2Nlc3MiO319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9zZXJ2aWNlcyI7fX0=', 1723699661),
('CaXFpOUgzqN8WlzskaHODARaK5lMqGbSQFyVdngc', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQ1dBU1ZURmtNOWtJZkk3UzhXSHJEdUFDUDlHampCazNSWm5USVhnOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9zZXJ2aWNlcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1723806239),
('elto0UTUzuYSBj2LZnzFDsNOOS4DpI7bWJVNzCt9', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidlpWNVVFM3lEdkRoaHBrWVpwVlJPRUZNQnN6OXcyWjM2RjJRU2ZiMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1723806321),
('kImAJs8V7zd6fN9NHdYMz1xqK9dM5XWDIckcWfaK', 1, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Mobile Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibmZRMVhrNndsYnIwNTJHME1hSHV4M1pqdWpRSDVYN2lOeVFVMzRoNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9zZXJ2aWNlcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1723702928),
('ms8WBUTjLsR9beAutYMSooG2ZLpoYf2vAdRxt0Qy', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicUROSFZPZ2N1OEdMM2RlckJHRnBhNDJYTWNNV2Ezdkl6dHRVVU44UCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9sb2dpbiI7fX0=', 1723784653),
('nQRZ0mTGBRL0wrBIPDIhpvPtAd4pPhjgacivQQOS', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0', 'YTozOntzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3EiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoiNEJtMnJtb3Y0eGRESzRtQWN3bTdCZmhLV2hqOVcwS1h2WEtUWXRLayI7fQ==', 1723702651),
('vfEEqxlaBrEnXy6LjOF0mlkw5JxTIjnLcwqHitVH', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMFAxUzdNSDBpMW00d3NuS3RObTZ1cnhacHVxRWZJOFRiRDRlRkJibyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1723772901);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@example.com', NULL, '$2y$12$uV0yVLa6DfF9UaozRl.CHuj1zpGAHFZxGvFluOk7SgEgru7fZYNly', NULL, '2024-08-09 12:30:06', '2024-08-09 12:30:06'),
(3, 'admin1', 'admin@local.com', NULL, '$2y$12$JgwLm7xMsqco.uOz0689Cuq85ooLteDipMyzDDsqYk8z6NSrBwzni', NULL, '2024-08-15 01:54:10', '2024-08-15 01:54:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
