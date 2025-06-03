-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-06-12 15:28:00
-- 伺服器版本： 8.3.0
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `finalproject`
--

-- --------------------------------------------------------

--
-- 資料表結構 `food`
--

CREATE TABLE `food` (
  `foodName` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `store` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `foodImage` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `foodPrice` int NOT NULL,
  `storeLogo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `nutritionLabel` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ingredientList` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `food`
--

INSERT INTO `food` (`foodName`, `store`, `category`, `foodImage`, `foodPrice`, `storeLogo`, `nutritionLabel`, `ingredientList`) VALUES
('(熱壓吐司)松露嫩蛋', '7-11', '主食', 'https://www.7-11.com.tw/freshfoods/16_sandwich/images/sandwich_70.png', 60, '../assets/uploads/SV_logo.png', '', ''),
('(熱壓土司)丹麥紅豆麻糬', '7-11', '主食', 'https://www.7-11.com.tw/freshfoods/16_sandwich/images/sandwich_72.png', 60, '../assets/uploads/SV_logo.png', '', ''),
('(熱壓土司)丹麥鮪魚起司', '7-11', '主食', 'https://www.7-11.com.tw/freshfoods/16_sandwich/images/sandwich_48.png', 60, '../assets/uploads/SV_logo.png', '', ''),
('(熱壓土司)厚起司蛋', '7-11', '主食', 'https://www.7-11.com.tw/freshfoods/16_sandwich/images/sandwich_27.png', 65, '../assets/uploads/SV_logo.png', '', ''),
('(熱壓土司)白醬海鮮饗宴', '7-11', '主食', 'https://www.7-11.com.tw/freshfoods/16_sandwich/images/sandwich_58.png', 70, '../assets/uploads/SV_logo.png', '', ''),
('(熱壓土司)紐奧良風味烤雞', '7-11', '主食', 'https://www.7-11.com.tw/freshfoods/16_sandwich/images/sandwich_31.png', 65, '../assets/uploads/SV_logo.png', '', ''),
('(熱壓土司)醬燒炙烤牛', '7-11', '主食', 'https://www.7-11.com.tw/freshfoods/16_sandwich/images/sandwich_30.png', 70, '../assets/uploads/SV_logo.png', '', ''),
('(熱壓土司)里肌肉蛋', '7-11', '主食', 'https://www.7-11.com.tw/freshfoods/16_sandwich/images/sandwich_33.png', 65, '../assets/uploads/SV_logo.png', '', ''),
('21PLUS 香草烤雞沙拉', '7-11', '蔬果', 'https://www.7-11.com.tw/freshfoods/2_Light/images/light_972.png', 69, '../assets/uploads/SV_logo.png', '', ''),
('一之軒-虎皮蛋糕', '7-11', '甜點', 'https://www.7-11.com.tw/freshfoods/11_bread/images/bread_636.png', 45, '../assets/uploads/SV_logo.png', '', ''),
('勁辣雞腿堡', '7-11', '主食', 'https://www.7-11.com.tw/freshfoods/16_sandwich/images/sandwich_51.png', 59, '../assets/uploads/SV_logo.png', '', ''),
('台塑有機蒜頭', '7-11', '蔬果', 'https://www.7-11.com.tw/freshfoods/2_Light/images/light_971.png', 38, '../assets/uploads/SV_logo.png', '', ''),
('台塑有機薑', '7-11', '蔬果', 'https://www.7-11.com.tw/freshfoods/2_Light/images/light_970.png', 50, '../assets/uploads/SV_logo.png', '', ''),
('吉士豬肉堡加蛋', '7-11', '主食', 'https://www.7-11.com.tw/freshfoods/16_sandwich/images/sandwich_11.png', 45, '../assets/uploads/SV_logo.png', '', ''),
('墨西哥風味里肌火腿嫩蛋貝果', '7-11', '主食', 'https://www.7-11.com.tw/freshfoods/16_sandwich/images/sandwich_66.png', 69, '../assets/uploads/SV_logo.png', '', ''),
('墨西哥風鮮彩握沙拉', '全家', '蔬果', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_13.jpg', 69, '../assets/uploads/FM_logo.png', '', ''),
('大口雞肉燴黑醋飯糰', '全家', '飯糰', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_6.jpg', 62, '../assets/uploads/FM_logo.png', '', ''),
('大口鹽麴烤豚飯糰', '全家', '飯糰', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_5.jpg', 62, '../assets/uploads/FM_logo.png', '', ''),
('奶油蛋黃醬培根義大利麵', '7-11', '主食', 'https://www.7-11.com.tw/freshfoods/17_ohlala/images/ohlala_78.png', 89, '../assets/uploads/SV_logo.png', '', ''),
('姬肯纖女蔬滿盒', '全家', '蔬果', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_16.jpg', 129, '../assets/uploads/FM_logo.png', '', ''),
('小龍蝦沙拉蛋三明治', '7-11', '三明治', 'https://www.7-11.com.tw/freshfoods/16_sandwich/images/sandwich_21.png', 49, '../assets/uploads/SV_logo.png', '', ''),
('巧克力麻吉球', '全家', '甜點', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_23.jpg', 39, '../assets/uploads/FM_logo.png', '', ''),
('彩漾四色細卷組', '全家', '飯糰', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_3.jpg', 45, '../assets/uploads/FM_logo.png', '', ''),
('提拉米蘇', '全家', '甜點', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_26.jpg', 48, '../assets/uploads/FM_logo.png', '', ''),
('提拉米蘇千層蛋糕', '全家', '甜點', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_27.jpg', 55, '../assets/uploads/FM_logo.png', '', ''),
('提拉米蘇泡芙', '全家', '甜點', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_25.jpg', 45, '../assets/uploads/FM_logo.png', '', ''),
('日式烏龍拌麵', '全家', '主食', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_8.jpg', 109, '../assets/uploads/FM_logo.png', '', ''),
('日式蕨餅紅豆三明治', '全家', '三明治', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_7.jpg', 65, '../assets/uploads/FM_logo.png', '', ''),
('旨味海陸雙手卷', '全家', '飯糰', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_2.jpg', 55, '../assets/uploads/FM_logo.png', '', ''),
('明太子軟法', '全家', '麵包', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_20.jpg', 45, '../assets/uploads/FM_logo.png', '', ''),
('春上蛋糕杯-手沖泰奶', '7-11', '甜點', 'https://www.7-11.com.tw/freshfoods/11_bread/images/bread_655.png', 89, '../assets/uploads/SV_logo.png', '', ''),
('木曜薯餅蛋堡', '7-11', '主食', 'https://www.7-11.com.tw/freshfoods/16_sandwich/images/sandwich_68.png', 59, '../assets/uploads/SV_logo.png', '', ''),
('杏仁巧克力風味鮮奶油三明治', '7-11', '三明治', 'https://www.7-11.com.tw/freshfoods/16_sandwich/images/sandwich_71.png', 39, '../assets/uploads/SV_logo.png', '', ''),
('松露蕈菇白醬烘蛋堡', '全家', '主食', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_40.jpg', 55, '../assets/uploads/FM_logo.png', '', ''),
('桃我開心塔', '全家', '甜點', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_32.jpg', 69, '../assets/uploads/FM_logo.png', '', ''),
('椒鹽鹽酥雞', '全家', '主食', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_44.jpg', 49, '../assets/uploads/FM_logo.png', '', ''),
('楓糖奶霜鬆餅', '7-11', '甜點', 'https://www.7-11.com.tw/freshfoods/11_bread/images/bread_652.png', 39, '../assets/uploads/SV_logo.png', '', ''),
('極饗-香腸雙拼便當', '7-11', '主食', 'https://www.7-11.com.tw/freshfoods/3_Cuisine/images/cuisine_281.png', 89, '../assets/uploads/SV_logo.png', '', ''),
('檸檬卡士達千層蛋糕', '全家', '甜點', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_28.jpg', 59, '../assets/uploads/FM_logo.png', '', ''),
('檸檬橄欖油冷義大利麵', '全家', '主食', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_9.jpg', 85, '../assets/uploads/FM_logo.png', '', ''),
('檸檬百香胖芙蛋糕', '全家', '甜點', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_30.jpg', 35, '../assets/uploads/FM_logo.png', '', ''),
('水蜜桃牛奶霜淇淋', '7-11', '甜點', 'https://www.7-11.com.tw/freshfoods/22_ice/images/ice_15.png', 49, '../assets/uploads/SV_logo.png', '', ''),
('油蔥Ｇ絲飯糰', '全家', '飯糰', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_11.jpg', 35, '../assets/uploads/FM_logo.png', '', ''),
('法式杏仁葡萄布里歐捲', '全家', '麵包', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_37.jpg', 39, '../assets/uploads/FM_logo.png', '', ''),
('法式檸檬塔', '全家', '甜點', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_31.jpg', 42, '../assets/uploads/FM_logo.png', '', ''),
('波士頓派', '全家', '甜點', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_34.jpg', 42, '../assets/uploads/FM_logo.png', '', ''),
('泰式椰汁綠咖哩雞肉飯(辣)', '7-11', '主食', 'https://www.7-11.com.tw/freshfoods/5_ForeignDishes/images/ForeignDishes_421.png', 89, '../assets/uploads/SV_logo.png', '', ''),
('火烤胸排蔬滿盒', '全家', '蔬果', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_15.jpg', 129, '../assets/uploads/FM_logo.png', '', ''),
('烤蔬菜番茄筆尖麵', '全家', '主食', '../assets/uploads/烤蔬菜番茄筆尖麵.jpg', 79, '../assets/uploads/FM_logo.png', '', ''),
('珍味雙魚雙手卷', '全家', '飯糰', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_1.jpg', 55, '../assets/uploads/FM_logo.png', '', ''),
('瑪格王后巧巴達', '全家', '麵包', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_21.jpg', 39, '../assets/uploads/FM_logo.png', '', ''),
('糯麥紅藜雞絲沙拉', '7-11', '蔬果', 'https://www.7-11.com.tw/freshfoods/2_Light/images/light_941.png', 59, '../assets/uploads/SV_logo.png', '', ''),
('紅心芭樂（截切）', '全家', '蔬果', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_45.jpg', 59, '../assets/uploads/FM_logo.png', '', ''),
('紐奧良風味鮮蔬烤雞三明治', '7-11', '三明治', 'https://www.7-11.com.tw/freshfoods/16_sandwich/images/sandwich_04.png', 49, '../assets/uploads/SV_logo.png', '', ''),
('紐西蘭愛妃蘋果切片', '7-11', '蔬果', 'https://www.7-11.com.tw/freshfoods/2_Light/images/light_969.png', 59, '../assets/uploads/SV_logo.png', '', ''),
('紐西蘭愛妃蘋果（截切杯）', '全家', '蔬果', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_47.jpg', 69, '../assets/uploads/FM_logo.png', '', ''),
('紐西蘭水蜜桃蘋果（截切杯）', '全家', '蔬果', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_46.jpg', 69, '../assets/uploads/FM_logo.png', '', ''),
('絲滑奶油餐包（４入）', '全家', '麵包', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_38.jpg', 52, '../assets/uploads/FM_logo.png', '', ''),
('羅勒海鮮冷義大利麵', '全家', '主食', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_10.jpg', 85, '../assets/uploads/FM_logo.png', '', ''),
('芒果大福', '全家', '甜點', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_33.jpg', 42, '../assets/uploads/FM_logo.png', '', ''),
('芝麻香鬆飯糰', '全家', '飯糰', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_12.jpg', 35, '../assets/uploads/FM_logo.png', '', ''),
('花生牛奶麵包', '全家', '麵包', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_36.jpg', 39, '../assets/uploads/FM_logo.png', '', ''),
('藍莓乳酪三明治', '7-11', '三明治', 'https://www.7-11.com.tw/freshfoods/16_sandwich/images/sandwich_09.png', 29, '../assets/uploads/SV_logo.png', '', ''),
('藍莓乳酪軟歐', '全家', '麵包', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_19.jpg', 45, '../assets/uploads/FM_logo.png', '', ''),
('蜂蜜雙餡雪花蛋糕', '全家', '甜點', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_39.jpg', 35, '../assets/uploads/FM_logo.png', '', ''),
('蜜紅豆丹麥', '7-11', '麵包', 'https://www.7-11.com.tw/freshfoods/11_bread/images/bread_653.png', 45, '../assets/uploads/SV_logo.png', '', ''),
('蜜香金檸鬆餅', '全家', '甜點', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_29.jpg', 39, '../assets/uploads/FM_logo.png', '', ''),
('起司三重奏三明治', '7-11', '三明治', 'https://www.7-11.com.tw/freshfoods/16_sandwich/images/sandwich_05.png', 39, '../assets/uploads/SV_logo.png', '', ''),
('辣乳酪丹麥條', '全家', '麵包', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_22.jpg', 39, '../assets/uploads/FM_logo.png', '', ''),
('鐵觀音黑岩泡芙', '全家', '甜點', '../assets/uploads/鐵觀音黑岩泡芙.jpg', 49, '../assets/uploads/FM_logo.png', '', ''),
('阜杭豆漿-經典飯糰', '7-11', '飯糰', 'https://www.7-11.com.tw/freshfoods/1_Ricerolls/images/ricerolls_440.png', 45, '../assets/uploads/SV_logo.png', '', ''),
('陳嘉謨監製-糖醋肉', '7-11', '主食', 'https://www.7-11.com.tw/freshfoods/4_Snacks/images/Snacks_252.png', 159, '../assets/uploads/SV_logo.png', '', ''),
('雙倍起司火腿蛋三明治', '7-11', '三明治', 'https://www.7-11.com.tw/freshfoods/16_sandwich/images/sandwich_36.png', 39, '../assets/uploads/SV_logo.png', '', ''),
('青醬優格雞肉握沙拉', '全家', '蔬果', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_14.jpg', 69, '../assets/uploads/FM_logo.png', '', ''),
('頌丹樂-泰式打拋豬肉飯', '7-11', '主食', 'https://www.7-11.com.tw/freshfoods/19_star/images/star_133.png', 89, '../assets/uploads/SV_logo.png', '', ''),
('頌丹樂-泰式打拋豬飯糰', '7-11', '飯糰', 'https://www.7-11.com.tw/freshfoods/19_star/images/star_134.png', 39, '../assets/uploads/SV_logo.png', '', ''),
('頌丹樂-泰式烤雞冷麵', '7-11', '主食', 'https://www.7-11.com.tw/freshfoods/19_star/images/star_131.png', 89, '../assets/uploads/SV_logo.png', '', ''),
('頌丹樂-遇見泰式打拋雞拌麵', '7-11', '主食', 'https://www.7-11.com.tw/freshfoods/19_star/images/star_132.png', 99, '../assets/uploads/SV_logo.png', '', ''),
('頌丹樂泰奶生乳捲', '7-11', '甜點', 'https://www.7-11.com.tw/freshfoods/19_star/images/star_135.png', 69, '../assets/uploads/SV_logo.png', '', ''),
('香格里拉-醬皇牛肉飯', '7-11', '主食', 'https://www.7-11.com.tw/freshfoods/19_star/images/star_136.png', 109, '../assets/uploads/SV_logo.png', '', ''),
('香鬆紫米風味飯糰', '7-11', '飯糰', 'https://www.7-11.com.tw/freshfoods/18_veg/images/veg_106.png', 49, '../assets/uploads/SV_logo.png', '', ''),
('馬鈴薯玉米濃湯', '全家', '主食', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_41.jpg', 55, '../assets/uploads/FM_logo.png', '', ''),
('鮪魚洋芋溏心蛋三明治', '7-11', '三明治', 'https://www.7-11.com.tw/freshfoods/16_sandwich/images/sandwich_57.png', 49, '../assets/uploads/SV_logo.png', '', ''),
('鮮乳生餐包', '全家', '麵包', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_35.jpg', 45, '../assets/uploads/FM_logo.png', '', ''),
('鮮筍排骨湯', '全家', '主食', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_42.jpg', 69, '../assets/uploads/FM_logo.png', '', ''),
('鮮筍雞茸粥', '全家', '主食', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_43.jpg', 70, '../assets/uploads/FM_logo.png', '', ''),
('鹽蔥燒肉飯糰', '全家', '飯糰', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_4.jpg', 35, '../assets/uploads/FM_logo.png', '', ''),
('麻油雞飯糰', '7-11', '飯糰', 'https://www.7-11.com.tw/freshfoods/1_Ricerolls/images/ricerolls_439.png', 49, '../assets/uploads/SV_logo.png', '', ''),
('黃金流蜜小土司', '全家', '麵包', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_18.jpg', 39, '../assets/uploads/FM_logo.png', '', ''),
('黃金蝦排堡', '7-11', '主食', 'https://www.7-11.com.tw/freshfoods/16_sandwich/images/sandwich_73.png', 89, '../assets/uploads/SV_logo.png', '', ''),
('黑心雲朵燒', '全家', '甜點', 'https://www.family.com.tw/Manager/MarketingBS/Content/Pic/food_0612_24.jpg', 35, '../assets/uploads/FM_logo.png', '', '');

-- --------------------------------------------------------

--
-- 資料表結構 `food_avgscore`
--

CREATE TABLE `food_avgscore` (
  `foodName` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `uEmail` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `reviewTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `satietyAvg` decimal(3,1) NOT NULL,
  `preferAvg` decimal(3,1) NOT NULL,
  `priceAvg` decimal(3,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `food_avgscore`
--

INSERT INTO `food_avgscore` (`foodName`, `uEmail`, `reviewTime`, `satietyAvg`, `preferAvg`, `priceAvg`) VALUES
('烤蔬菜番茄筆尖麵', 'dazhuang@gmail.com', '2024-06-12 13:27:37', 4.2, 7.5, 6.4),
('鐵觀音黑岩泡芙', 'xiaoshuai@gmail.com', '2024-06-12 13:27:37', 3.2, 7.6, 6.9),
('(熱壓土司)醬燒炙烤牛', 'wen@gmail.com', '2024-06-12 13:27:37', 6.5, 8.0, 2.3),
('珍味雙魚雙手卷', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 1.1, 4.7, 1.2),
('旨味海陸雙手卷', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 8.7, 3.2, 6.9),
('彩漾四色細卷組', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 5.7, 7.0, 7.8),
('鹽蔥燒肉飯糰', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 8.1, 6.8, 9.0),
('大口鹽麴烤豚飯糰', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 5.6, 9.0, 9.1),
('大口雞肉燴黑醋飯糰', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 8.7, 6.2, 3.7),
('日式蕨餅紅豆三明治', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 7.9, 9.6, 5.3),
('日式烏龍拌麵', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 5.8, 3.1, 5.8),
('檸檬橄欖油冷義大利麵', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 1.0, 4.7, 1.4),
('羅勒海鮮冷義大利麵', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 9.8, 7.7, 8.0),
('油蔥Ｇ絲飯糰', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 7.0, 1.1, 1.4),
('芝麻香鬆飯糰', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 2.6, 7.7, 3.0),
('墨西哥風鮮彩握沙拉', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 8.9, 7.3, 8.8),
('青醬優格雞肉握沙拉', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 3.3, 7.0, 6.1),
('火烤胸排蔬滿盒', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 8.4, 4.8, 6.6),
('姬肯纖女蔬滿盒', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 8.9, 5.4, 8.3),
('黃金流蜜小土司', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 6.6, 6.9, 4.6),
('藍莓乳酪軟歐', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 1.4, 1.3, 1.1),
('明太子軟法', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 9.5, 7.4, 7.3),
('瑪格王后巧巴達', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 4.6, 8.9, 2.8),
('辣乳酪丹麥條', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 4.4, 3.6, 3.8),
('巧克力麻吉球', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 7.2, 5.6, 5.4),
('黑心雲朵燒', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 9.0, 1.0, 4.2),
('提拉米蘇泡芙', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 7.7, 6.9, 1.4),
('提拉米蘇', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 3.2, 1.9, 7.7),
('提拉米蘇千層蛋糕', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 5.1, 1.4, 8.6),
('檸檬卡士達千層蛋糕', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 1.6, 8.4, 9.2),
('蜜香金檸鬆餅', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 2.0, 7.1, 6.7),
('檸檬百香胖芙蛋糕', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 8.3, 2.2, 3.0),
('法式檸檬塔', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 7.5, 9.4, 5.8),
('桃我開心塔', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 8.5, 6.1, 4.0),
('芒果大福', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 9.9, 9.2, 6.4),
('波士頓派', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 3.3, 5.4, 7.0),
('鮮乳生餐包', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 9.0, 5.0, 5.8),
('花生牛奶麵包', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 4.0, 1.6, 4.0),
('法式杏仁葡萄布里歐捲', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 5.2, 4.2, 4.1),
('絲滑奶油餐包（４入）', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 7.2, 4.7, 9.7),
('蜂蜜雙餡雪花蛋糕', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 6.6, 2.8, 2.1),
('松露蕈菇白醬烘蛋堡', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 1.3, 8.3, 9.5),
('馬鈴薯玉米濃湯', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 3.7, 7.0, 4.9),
('鮮筍排骨湯', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 2.4, 5.4, 9.8),
('鮮筍雞茸粥', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 4.7, 2.0, 4.0),
('椒鹽鹽酥雞', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 4.2, 7.8, 7.6),
('紅心芭樂（截切）', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 4.4, 7.3, 4.3),
('紐西蘭水蜜桃蘋果（截切杯）', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 7.5, 5.9, 5.7),
('紐西蘭愛妃蘋果（截切杯）', 'dazhuang@gmail.com', '2024-06-12 20:00:48', 9.7, 3.5, 5.4),
('頌丹樂-泰式烤雞冷麵', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 4.5, 7.9, 7.2),
('頌丹樂-遇見泰式打拋雞拌麵', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 2.3, 6.9, 8.5),
('頌丹樂-泰式打拋豬肉飯', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 2.8, 5.3, 8.3),
('頌丹樂-泰式打拋豬飯糰', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 6.6, 7.0, 5.4),
('頌丹樂泰奶生乳捲', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 4.7, 6.6, 8.6),
('香格里拉-醬皇牛肉飯', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 4.3, 3.7, 4.8),
('麻油雞飯糰', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 2.7, 7.0, 8.0),
('阜杭豆漿-經典飯糰', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 9.1, 2.5, 2.2),
('紐西蘭愛妃蘋果切片', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 2.6, 5.2, 8.3),
('台塑有機薑', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 7.0, 9.1, 5.4),
('台塑有機蒜頭', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 7.9, 4.1, 4.8),
('21PLUS 香草烤雞沙拉', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 1.7, 2.1, 4.6),
('糯麥紅藜雞絲沙拉', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 6.4, 8.5, 4.2),
('極饗-香腸雙拼便當', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 3.6, 4.2, 9.3),
('陳嘉謨監製-糖醋肉', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 5.9, 9.4, 1.4),
('泰式椰汁綠咖哩雞肉飯(辣)', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 5.0, 1.6, 1.2),
('楓糖奶霜鬆餅', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 9.2, 5.3, 6.9),
('一之軒-虎皮蛋糕', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 8.8, 4.1, 2.3),
('蜜紅豆丹麥', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 7.1, 9.5, 7.2),
('春上蛋糕杯-手沖泰奶', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 6.6, 1.4, 4.2),
('奶油蛋黃醬培根義大利麵', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 6.7, 2.1, 7.5),
('香鬆紫米風味飯糰', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 3.1, 9.9, 3.2),
('水蜜桃牛奶霜淇淋', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 3.2, 5.7, 8.8),
('黃金蝦排堡', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 7.7, 2.3, 5.5),
('木曜薯餅蛋堡', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 1.5, 7.9, 7.1),
('勁辣雞腿堡', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 1.8, 4.7, 8.3),
('吉士豬肉堡加蛋', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 8.1, 5.9, 4.1),
('墨西哥風味里肌火腿嫩蛋貝果', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 1.7, 4.2, 6.1),
('(熱壓土司)丹麥紅豆麻糬', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 7.9, 2.0, 3.4),
('(熱壓吐司)松露嫩蛋', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 1.0, 2.9, 1.5),
('(熱壓土司)白醬海鮮饗宴', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 7.0, 2.1, 6.9),
('(熱壓土司)丹麥鮪魚起司', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 8.8, 4.6, 4.4),
('(熱壓土司)厚起司蛋', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 7.4, 4.8, 9.9),
('(熱壓土司)醬燒炙烤牛', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 7.1, 4.7, 1.0),
('(熱壓土司)紐奧良風味烤雞', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 8.1, 9.7, 4.8),
('(熱壓土司)里肌肉蛋', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 3.2, 9.3, 9.1),
('杏仁巧克力風味鮮奶油三明治', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 7.6, 9.8, 7.0),
('藍莓乳酪三明治', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 4.6, 9.9, 7.8),
('小龍蝦沙拉蛋三明治', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 8.1, 7.2, 1.8),
('鮪魚洋芋溏心蛋三明治', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 4.2, 5.7, 5.9),
('雙倍起司火腿蛋三明治', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 2.3, 1.9, 1.5),
('起司三重奏三明治', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 9.7, 7.3, 6.3),
('紐奧良風味鮮蔬烤雞三明治', 'dazhuang@gmail.com', '2024-06-12 20:07:20', 8.8, 5.9, 2.0);

-- --------------------------------------------------------

--
-- 資料表結構 `review`
--

CREATE TABLE `review` (
  `uEmail` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `foodName` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `reviewTime` datetime NOT NULL,
  `reviewText` text COLLATE utf8mb4_general_ci,
  `satietyReview` decimal(2,1) NOT NULL,
  `preferReview` decimal(2,1) NOT NULL,
  `priceReview` decimal(2,1) NOT NULL,
  `likeCount` int NOT NULL,
  `dislike` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `review`
--

INSERT INTO `review` (`uEmail`, `foodName`, `reviewTime`, `reviewText`, `satietyReview`, `preferReview`, `priceReview`, `likeCount`, `dislike`) VALUES
('dazhuang@gmail.com', '烤蔬菜番茄筆尖麵', '2024-05-30 11:08:35', '味道很不錯，但分量有點少，食量大的人不推薦', 4.0, 7.8, 6.5, 4, 1),
('dazhuang@gmail.com', '烤蔬菜番茄筆尖麵', '2024-06-11 20:13:21', '味道很不錯，但分量有點少，食量大的人不推薦', 6.6, 7.9, 8.2, 1, 1),
('dazhuang@gmail.com', '烤蔬菜番茄筆尖麵', '2024-06-12 08:20:13', 'ruyyuglg', 8.4, 7.7, 7.1, 1, 1),
('dazhuang@gmail.com', '烤蔬菜番茄筆尖麵', '2024-06-12 08:20:44', 'ruyyuglg', 8.4, 7.7, 7.1, 1, 1),
('wen@gmail.com', '提拉米蘇', '2024-06-12 14:05:00', '我愛死了', 8.8, 9.1, 8.9, 1, 1),
('wen@gmail.com', '提拉米蘇千層蛋糕', '2024-06-12 14:09:44', '好吃，但稍微可惜', 2.1, 9.1, 3.8, 1, 1),
('wen@gmail.com', '頌丹樂泰奶生乳捲', '2024-06-12 14:12:25', '看起來還行，可是我沒吃過，', 8.8, 7.8, 3.3, 1, 1),
('xiaomei@gmail.com', '烤蔬菜番茄筆尖麵', '2024-06-12 08:11:22', 'SI 8', 7.2, 9.1, 7.5, 1, 1),
('xiaoshuai@gmail.com', '鐵觀音黑岩泡芙', '2024-06-09 19:11:16', '很好吃，巧克力味很足，巧克力控必備', 3.1, 8.5, 7.9, 1, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `review_photos`
--

CREATE TABLE `review_photos` (
  `uEmail` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `foodName` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `reviewTime` datetime NOT NULL,
  `photoPath` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `review_photos`
--

INSERT INTO `review_photos` (`uEmail`, `foodName`, `reviewTime`, `photoPath`) VALUES
('dazhuang@gmail.com', '烤蔬菜番茄筆尖麵', '2024-06-11 20:13:21', '../foodimgs/S__14393347.jpg'),
('xiaomei@gmail.com', '烤蔬菜番茄筆尖麵', '2024-06-12 08:11:22', '../foodimgs/11_3678_22e0fcbc238ad1d.jpg'),
('xiaomei@gmail.com', '烤蔬菜番茄筆尖麵', '2024-06-12 08:11:22', '../foodimgs/44fae661-7d5a-499d-8adb-6569ccd0e7f8.png'),
('dazhuang@gmail.com', '烤蔬菜番茄筆尖麵', '2024-06-12 08:20:44', '../foodimgs/cat-catcry.gif'),
('wen@gmail.com', '提拉米蘇', '2024-06-12 14:05:00', '../foodimgs/無標題86_20231212204235 (1).png'),
('wen@gmail.com', '提拉米蘇千層蛋糕', '2024-06-12 14:09:44', '../foodimgs/螢幕擷取畫面 2024-06-09 125336.png'),
('wen@gmail.com', '頌丹樂泰奶生乳捲', '2024-06-12 14:12:25', '../foodimgs/Italy Sunset Ambience Cityscape.png');

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `uName` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `uEmail` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `uPass` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `uGender` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `uPhoto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '../assets/SB_image/userPhoto.jpg',
  `uAge` tinyint DEFAULT NULL,
  `uHeight` decimal(4,1) DEFAULT NULL,
  `uWeight` decimal(4,1) DEFAULT NULL,
  `uIdentify` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`uName`, `uEmail`, `uPass`, `uGender`, `uPhoto`, `uAge`, `uHeight`, `uWeight`, `uIdentify`) VALUES
('巴姐', 'bajie@mail.com', 'bajie123', '女生', '../userImg/1000004261.jpg', 23, 165.0, 45.0, 'user'),
('黑哥', 'dazhuang@gmail.com', 'dazhuang123', '男生', '../userImg/sick-thats.gif', 21, 175.0, 65.0, 'admin'),
('EMIYA', 'emiya@mail.com', 'emiya123', NULL, '../assets/SB_image/userPhoto.jpg', NULL, NULL, NULL, 'user'),
('wen', 'wen@gmail.com', 'wen123456', '男生', '../assets/SB_image/userPhoto.jpg\r\n', 20, 173.0, 58.0, 'admin'),
('小美', 'xiaomei@gmail.com', 'xiaomei123', '女生', '../assets/SB_image/userPhoto.jpg', 16, 160.0, 50.0, 'user'),
('小帥', 'xiaoshuai@gmail.com', 'xiaoshuai123', '男生', '../assets/SB_image/userPhoto.jpg', 21, 168.6, 54.4, 'user');

-- --------------------------------------------------------

--
-- 資料表結構 `users_consump`
--

CREATE TABLE `users_consump` (
  `uEmail` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `userConsump` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `users_consump`
--

INSERT INTO `users_consump` (`uEmail`, `userConsump`) VALUES
('dazhuang@gmail.com', 4);

-- --------------------------------------------------------

--
-- 資料表結構 `user_dietary`
--

CREATE TABLE `user_dietary` (
  `uEmail` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `saltyPrefer` tinyint DEFAULT NULL,
  `sourPrefer` tinyint DEFAULT NULL,
  `sweetPrefer` tinyint DEFAULT NULL,
  `bitterPrefer` tinyint DEFAULT NULL,
  `spicyPrefer` tinyint DEFAULT NULL,
  `dietaryPrefer` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `user_dietary`
--

INSERT INTO `user_dietary` (`uEmail`, `saltyPrefer`, `sourPrefer`, `sweetPrefer`, `bitterPrefer`, `spicyPrefer`, `dietaryPrefer`) VALUES
('dazhuang@gmail.com', 3, 2, 5, 1, 4, 4);

-- --------------------------------------------------------

--
-- 資料表結構 `user_dislike_food`
--

CREATE TABLE `user_dislike_food` (
  `uEmail` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `foodName` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `user_dislike_food`
--

INSERT INTO `user_dislike_food` (`uEmail`, `foodName`) VALUES
('dazhuang@gmail.com', '烤蔬菜番茄筆尖麵'),
('wen@gmail.com', '烤蔬菜番茄筆尖麵');

-- --------------------------------------------------------

--
-- 資料表結構 `user_like_food`
--

CREATE TABLE `user_like_food` (
  `uEmail` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `foodName` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `user_like_food`
--

INSERT INTO `user_like_food` (`uEmail`, `foodName`) VALUES
('dazhuang@gmail.com', '烤蔬菜番茄筆尖麵'),
('wen@gmail.com', '鐵觀音黑岩泡芙'),
('xiaomei@gmail.com', '鐵觀音黑岩泡芙');

-- --------------------------------------------------------

--
-- 資料表結構 `user_prefer`
--

CREATE TABLE `user_prefer` (
  `uEmail` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `prohibitFood` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `user_prefer`
--

INSERT INTO `user_prefer` (`uEmail`, `prohibitFood`) VALUES
('dazhuang@gmail.com', '堅果（如：花生、杏仁等）'),
('wen@gmail.com', '烤蔬菜番茄筆尖麵');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`foodName`),
  ADD UNIQUE KEY `foodImage` (`foodImage`);

--
-- 資料表索引 `food_avgscore`
--
ALTER TABLE `food_avgscore`
  ADD KEY `uEmail` (`uEmail`),
  ADD KEY `foodName` (`foodName`);

--
-- 資料表索引 `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`uEmail`,`foodName`,`reviewTime`),
  ADD KEY `foodName` (`foodName`);

--
-- 資料表索引 `review_photos`
--
ALTER TABLE `review_photos`
  ADD KEY `uEmail` (`uEmail`,`foodName`,`reviewTime`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uEmail`);

--
-- 資料表索引 `users_consump`
--
ALTER TABLE `users_consump`
  ADD PRIMARY KEY (`userConsump`),
  ADD KEY `uEmail` (`uEmail`);

--
-- 資料表索引 `user_dietary`
--
ALTER TABLE `user_dietary`
  ADD PRIMARY KEY (`uEmail`,`dietaryPrefer`);

--
-- 資料表索引 `user_dislike_food`
--
ALTER TABLE `user_dislike_food`
  ADD KEY `uEmail` (`uEmail`),
  ADD KEY `foodName` (`foodName`);

--
-- 資料表索引 `user_like_food`
--
ALTER TABLE `user_like_food`
  ADD KEY `uEmail` (`uEmail`),
  ADD KEY `foodName` (`foodName`);

--
-- 資料表索引 `user_prefer`
--
ALTER TABLE `user_prefer`
  ADD PRIMARY KEY (`uEmail`,`prohibitFood`);

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `food_avgscore`
--
ALTER TABLE `food_avgscore`
  ADD CONSTRAINT `food_avgscore_ibfk_1` FOREIGN KEY (`uEmail`) REFERENCES `users` (`uEmail`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `food_avgscore_ibfk_2` FOREIGN KEY (`foodName`) REFERENCES `food` (`foodName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`uEmail`) REFERENCES `users` (`uEmail`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`foodName`) REFERENCES `food` (`foodName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `review_photos`
--
ALTER TABLE `review_photos`
  ADD CONSTRAINT `review_photos_ibfk_1` FOREIGN KEY (`uEmail`,`foodName`,`reviewTime`) REFERENCES `review` (`uEmail`, `foodName`, `reviewTime`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `users_consump`
--
ALTER TABLE `users_consump`
  ADD CONSTRAINT `users_consump_ibfk_1` FOREIGN KEY (`uEmail`) REFERENCES `users` (`uEmail`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `user_dietary`
--
ALTER TABLE `user_dietary`
  ADD CONSTRAINT `user_dietary_ibfk_1` FOREIGN KEY (`uEmail`) REFERENCES `users` (`uEmail`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `user_dislike_food`
--
ALTER TABLE `user_dislike_food`
  ADD CONSTRAINT `user_dislike_food_ibfk_1` FOREIGN KEY (`uEmail`) REFERENCES `users` (`uEmail`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_dislike_food_ibfk_2` FOREIGN KEY (`foodName`) REFERENCES `food` (`foodName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `user_like_food`
--
ALTER TABLE `user_like_food`
  ADD CONSTRAINT `user_like_food_ibfk_1` FOREIGN KEY (`uEmail`) REFERENCES `users` (`uEmail`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_like_food_ibfk_2` FOREIGN KEY (`foodName`) REFERENCES `food` (`foodName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `user_prefer`
--
ALTER TABLE `user_prefer`
  ADD CONSTRAINT `user_prefer_ibfk_1` FOREIGN KEY (`uEmail`) REFERENCES `users` (`uEmail`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
