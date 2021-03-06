/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50530
Source Host           : localhost:3306
Source Database       : laugh

Target Server Type    : MYSQL
Target Server Version : 50530
File Encoding         : 65001

Date: 2013-09-15 21:30:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `la_city`
-- ----------------------------
DROP TABLE IF EXISTS `la_city`;
CREATE TABLE `la_city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL COMMENT '市',
  `pid` int(11) DEFAULT '1' COMMENT 'province_id',
  `pinyin` varchar(50) DEFAULT NULL COMMENT '拼音',
  `pinyin_tongcheng` varchar(50) NOT NULL,
  `pinyin_baixing` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=349 DEFAULT CHARSET=utf8 COMMENT='市';

-- ----------------------------
-- Records of la_city
-- ----------------------------
INSERT INTO `la_city` VALUES ('1', '鞍山市', '9', 'anshan', 'as', 'anshan');
INSERT INTO `la_city` VALUES ('2', '安阳市', '13', 'anyang', 'ay', 'anyang');
INSERT INTO `la_city` VALUES ('3', '安庆市', '17', 'anqing', 'anqing', 'anqing');
INSERT INTO `la_city` VALUES ('4', '安康市', '24', 'ankang', 'ankang', 'ankang');
INSERT INTO `la_city` VALUES ('5', '阿克苏市', '30', 'akesu', 'aks', 'akesu');
INSERT INTO `la_city` VALUES ('6', '安顺市', '8', 'anshun', 'anshun', 'anshun');
INSERT INTO `la_city` VALUES ('7', '阿勒泰市', '30', 'aletai', '', 'aletai');
INSERT INTO `la_city` VALUES ('8', '阿拉善市', '20', 'alashan', '', 'alashan');
INSERT INTO `la_city` VALUES ('9', '阿坝市', '6', 'aba', 'ab', 'aba');
INSERT INTO `la_city` VALUES ('10', '阿里市', '31', 'ali', 'al', 'ali');
INSERT INTO `la_city` VALUES ('11', '阿拉尔市', '33', 'alaer', 'ale', 'alaer');
INSERT INTO `la_city` VALUES ('12', '澳门市', '32', 'aomen', 'am', '');
INSERT INTO `la_city` VALUES ('13', '北京市', '1', 'bj', 'bj', 'beijing');
INSERT INTO `la_city` VALUES ('14', '保定市', '12', 'baoding', 'bd', 'baoding');
INSERT INTO `la_city` VALUES ('15', '滨州市', '16', 'binzhou', 'bz', 'binzhou');
INSERT INTO `la_city` VALUES ('16', '包头市', '20', 'baotou', 'bt', 'baotou');
INSERT INTO `la_city` VALUES ('17', '宝鸡市', '24', 'baoji', 'baoji', 'baoji');
INSERT INTO `la_city` VALUES ('18', '本溪市', '9', 'benxi', 'benxi', 'benxi');
INSERT INTO `la_city` VALUES ('19', '蚌埠市', '17', 'bengbu', 'bengbu', 'bengbu');
INSERT INTO `la_city` VALUES ('20', '北海市', '18', 'beihai', 'bh', 'beihai');
INSERT INTO `la_city` VALUES ('21', '巴彦淖尔市', '20', 'bayannaoer', 'bycem', 'bayannaoer');
INSERT INTO `la_city` VALUES ('22', '白城市', '14', 'baicheng', 'bc', 'baicheng');
INSERT INTO `la_city` VALUES ('23', '白山市', '14', 'baishan', 'baishan', 'baishan');
INSERT INTO `la_city` VALUES ('24', '亳州市', '17', 'bozhou', 'bozhou', 'bozhou');
INSERT INTO `la_city` VALUES ('25', '巴中市', '6', 'bazhong', 'bazhong', 'bazhong');
INSERT INTO `la_city` VALUES ('26', '白银市', '23', 'baiyin', 'by', 'baiyin');
INSERT INTO `la_city` VALUES ('27', '百色市', '18', 'baise', 'baise', 'bose');
INSERT INTO `la_city` VALUES ('28', '毕节市', '8', 'bijie', 'bijie', 'bijie');
INSERT INTO `la_city` VALUES ('29', '巴音郭楞市', '30', 'bayinguoleng', 'bygl', 'bayinguoleng');
INSERT INTO `la_city` VALUES ('30', '保山市', '29', 'baoshan', 'bs', 'baoshan');
INSERT INTO `la_city` VALUES ('31', '博尔塔拉市', '30', 'boertala', 'betl', 'boertala');
INSERT INTO `la_city` VALUES ('32', '成都市', '6', 'cd', 'cd', 'chengdu');
INSERT INTO `la_city` VALUES ('33', '重庆市', '4', 'cq', 'cq', 'chongqing');
INSERT INTO `la_city` VALUES ('34', '长沙市', '27', 'cs', 'cs', 'changsha');
INSERT INTO `la_city` VALUES ('35', '长春市', '14', 'cc', 'cc', 'changchun');
INSERT INTO `la_city` VALUES ('36', '常州市', '10', 'changzhou', 'cz', 'changzhou');
INSERT INTO `la_city` VALUES ('37', '沧州市', '12', 'cangzhou', 'cangzhou', 'cangzhou');
INSERT INTO `la_city` VALUES ('38', '赤峰市', '20', 'chifeng', 'chifeng', 'chifeng');
INSERT INTO `la_city` VALUES ('39', '承德市', '12', 'chengde', 'chengde', 'chengde');
INSERT INTO `la_city` VALUES ('40', '常德市', '27', 'changde', 'changde', 'changde');
INSERT INTO `la_city` VALUES ('41', '长治市', '21', 'changzhi', 'changzhi', 'changzhi');
INSERT INTO `la_city` VALUES ('42', '郴州市', '27', 'chenzhou', 'chenzhou', 'chenzhou');
INSERT INTO `la_city` VALUES ('43', '滁州市', '17', 'chuzhou', 'chuzhou', 'chuzhou');
INSERT INTO `la_city` VALUES ('44', '巢湖市', '17', 'chaohu', 'ch', 'chaohu');
INSERT INTO `la_city` VALUES ('45', '潮州市', '5', 'chaozhou', 'chaozhou', 'chaozhou');
INSERT INTO `la_city` VALUES ('46', '昌吉市', '30', 'changji', 'changji', 'changji');
INSERT INTO `la_city` VALUES ('47', '池州市', '17', 'chizhou', 'chizhou', 'chizhou');
INSERT INTO `la_city` VALUES ('48', '楚雄市', '29', 'chuxiong', 'cx', 'chuxiong');
INSERT INTO `la_city` VALUES ('49', '崇左市', '18', 'chongzuo', 'chongzuo', 'chongzuo');
INSERT INTO `la_city` VALUES ('50', '昌都市', '31', 'changdu', 'changdu', 'changdu');
INSERT INTO `la_city` VALUES ('51', '大连市', '9', 'dl', 'dl', 'dalian');
INSERT INTO `la_city` VALUES ('52', '东莞市', '5', 'dg', 'dg', 'dongguan');
INSERT INTO `la_city` VALUES ('53', '德州市', '16', 'dezhou', 'dz', 'dezhou');
INSERT INTO `la_city` VALUES ('54', '东营市', '16', 'dongying', 'dy', 'dongying');
INSERT INTO `la_city` VALUES ('55', '大庆市', '15', 'daqing', 'dq', 'daqing');
INSERT INTO `la_city` VALUES ('56', '大同市', '21', 'datong', 'dt', 'datong');
INSERT INTO `la_city` VALUES ('57', '丹东市', '9', 'dandong', 'dandong', 'dandong');
INSERT INTO `la_city` VALUES ('58', '德阳市', '6', 'deyang', 'deyang', 'deyang');
INSERT INTO `la_city` VALUES ('59', '达州市', '6', 'dazhou', 'dazhou', 'dazhou');
INSERT INTO `la_city` VALUES ('60', '大理市', '29', 'dali', 'dali', 'dali');
INSERT INTO `la_city` VALUES ('61', '大兴安岭市', '20', 'daxinganling', 'dxal', 'xingan');
INSERT INTO `la_city` VALUES ('62', '定西市', '23', 'dingxi', 'dx', 'dingxi');
INSERT INTO `la_city` VALUES ('63', '德宏市', '29', 'dehong', 'dh', 'dehong');
INSERT INTO `la_city` VALUES ('64', '迪庆市', '29', 'diqing', 'diqing', 'diqing');
INSERT INTO `la_city` VALUES ('65', '鄂尔多斯市', '20', 'eerduosi', 'erds', 'eerduosi');
INSERT INTO `la_city` VALUES ('66', '恩施市', '26', 'enshi', 'es', 'enshi');
INSERT INTO `la_city` VALUES ('67', '鄂州市', '26', 'ezhou', 'ez', 'ezhou');
INSERT INTO `la_city` VALUES ('68', '福州市', '11', 'fz', 'fz', 'fuzhou');
INSERT INTO `la_city` VALUES ('69', '佛山市', '5', 'foshan', 'fs', 'foshan');
INSERT INTO `la_city` VALUES ('70', '抚顺市', '9', 'fushun', 'fushun', 'fushun');
INSERT INTO `la_city` VALUES ('71', '阜阳市', '17', 'fuyang', 'fy', 'fuyang');
INSERT INTO `la_city` VALUES ('72', '阜新市', '9', 'fuxin', 'fx', 'fuxin');
INSERT INTO `la_city` VALUES ('73', '抚州市', '28', 'jxfuzhou', 'fuzhou', 'fz');
INSERT INTO `la_city` VALUES ('74', '防城港市', '18', 'fangchenggang', 'fcg', 'fangchenggang');
INSERT INTO `la_city` VALUES ('75', '广州市', '5', 'gz', 'gz', 'guangzhou');
INSERT INTO `la_city` VALUES ('76', '贵阳市', '8', 'gy', 'gy', 'guiyang');
INSERT INTO `la_city` VALUES ('77', '桂林市', '18', 'gl', 'gl', 'guilin');
INSERT INTO `la_city` VALUES ('78', '赣州市', '28', 'ganzhou', 'ganzhou', 'ganzhou');
INSERT INTO `la_city` VALUES ('79', '广元市', '6', 'guangyuan', 'guangyuan', 'guangyuan');
INSERT INTO `la_city` VALUES ('80', '广安市', '6', 'guangan', 'ga', 'guangan');
INSERT INTO `la_city` VALUES ('81', '贵港市', '18', 'guigang', 'gg', 'guigang');
INSERT INTO `la_city` VALUES ('82', '固原市', '22', 'guyuan', 'guyuan', 'guyuan');
INSERT INTO `la_city` VALUES ('83', '甘南市', '23', 'gannan', 'gn', 'gannan');
INSERT INTO `la_city` VALUES ('84', '甘孜市', '6', 'ganzi', 'ganzi', 'ganzi');
INSERT INTO `la_city` VALUES ('85', '果洛市', '25', 'guoluo', 'guoluo', 'guoluo');
INSERT INTO `la_city` VALUES ('86', '杭州市', '7', 'hz', 'hz', 'hangzhou');
INSERT INTO `la_city` VALUES ('87', '哈尔滨市', '15', 'hrb', 'hrb', 'haerbin');
INSERT INTO `la_city` VALUES ('88', '合肥市', '17', 'hf', 'hf', 'hefei');
INSERT INTO `la_city` VALUES ('89', '呼和浩特市', '20', 'nmg', 'hu', 'huhehaote');
INSERT INTO `la_city` VALUES ('90', '海口市', '19', 'hn', 'haikou', 'haikou');
INSERT INTO `la_city` VALUES ('91', '邯郸市', '12', 'handan', 'hd', 'handan');
INSERT INTO `la_city` VALUES ('92', '惠州市', '5', 'huizhou', 'huizhou', 'huizhou');
INSERT INTO `la_city` VALUES ('93', '菏泽市', '16', 'heze', 'heze', 'heze');
INSERT INTO `la_city` VALUES ('94', '衡水市', '12', 'hengshui', 'hs', 'hengshui');
INSERT INTO `la_city` VALUES ('95', '淮安市', '10', 'huaian', 'ha', 'huaian');
INSERT INTO `la_city` VALUES ('96', '衡阳市', '27', 'hengyang', 'hy', 'hengyang');
INSERT INTO `la_city` VALUES ('97', '葫芦岛市', '9', 'huludao', 'hld', 'huludao');
INSERT INTO `la_city` VALUES ('98', '淮南市', '17', 'huainan', 'hn', 'huainan');
INSERT INTO `la_city` VALUES ('99', '汉中市', '24', 'hanzhong', 'hanzhong', 'hanzhong');
INSERT INTO `la_city` VALUES ('100', '怀化市', '27', 'huaihua', 'hh', 'huaihua');
INSERT INTO `la_city` VALUES ('101', '淮北市', '17', 'huaibei', 'huaibei', 'huaibei');
INSERT INTO `la_city` VALUES ('102', '黄冈市', '26', 'huanggang', 'hg', 'huanggang');
INSERT INTO `la_city` VALUES ('103', '湖州市', '7', 'huzhou', 'huzhou', 'huzhou');
INSERT INTO `la_city` VALUES ('104', '黄石市', '26', 'huangshi', 'hshi', 'huangshi');
INSERT INTO `la_city` VALUES ('105', '呼伦贝尔市', '20', 'hulunbeier', 'hlbe', 'hulunbeier');
INSERT INTO `la_city` VALUES ('106', '河源市', '5', 'heyuan', 'heyuan', 'heyuan');
INSERT INTO `la_city` VALUES ('107', '鹤壁市', '13', 'hebi', 'hb', 'hebi');
INSERT INTO `la_city` VALUES ('108', '鹤岗市', '15', 'hegang', 'hegang', 'hegang');
INSERT INTO `la_city` VALUES ('109', '黄山市', '17', 'huangshan', 'huangshan', 'huangshan');
INSERT INTO `la_city` VALUES ('110', '红河市', '29', 'honghe', 'honghe', 'honghe');
INSERT INTO `la_city` VALUES ('111', '河池市', '18', 'hechi', 'hc', 'hechi');
INSERT INTO `la_city` VALUES ('112', '哈密市', '30', 'hami', 'hami', 'hami');
INSERT INTO `la_city` VALUES ('113', '黑河市', '15', 'heihe', 'heihe', 'heihe');
INSERT INTO `la_city` VALUES ('114', '贺州市', '18', 'hezhou', 'hezhou', 'hezhou');
INSERT INTO `la_city` VALUES ('115', '海西市', '25', 'haixi', 'hx', 'haixi');
INSERT INTO `la_city` VALUES ('116', '和田市', '30', 'hetian', 'ht', 'hetian');
INSERT INTO `la_city` VALUES ('117', '海北市', '25', 'haibei', 'haibei', 'haibei');
INSERT INTO `la_city` VALUES ('118', '海东市', '25', 'haidong', 'haidong', 'haidong');
INSERT INTO `la_city` VALUES ('119', '黄南市', '25', 'huangnan', 'huangnan', 'huangnan');
INSERT INTO `la_city` VALUES ('120', '济南市', '16', 'jn', 'jn', 'jinan');
INSERT INTO `la_city` VALUES ('121', '济宁市', '16', 'jining', 'jining', 'jining');
INSERT INTO `la_city` VALUES ('122', '吉林市', '14', 'jilin', 'jl', 'jilin');
INSERT INTO `la_city` VALUES ('123', '锦州市', '9', 'jinzhou', 'jinzhou', 'jinzhou');
INSERT INTO `la_city` VALUES ('124', '金华市', '7', 'jinhua', 'jh', 'jinhua');
INSERT INTO `la_city` VALUES ('125', '嘉兴市', '7', 'jiaxing', 'jx', 'jiaxing');
INSERT INTO `la_city` VALUES ('126', '江门市', '5', 'jiangmen', 'jm', 'jiangmen');
INSERT INTO `la_city` VALUES ('127', '荆州市', '26', 'jingzhou', 'jingzhou', 'jingzhou');
INSERT INTO `la_city` VALUES ('128', '焦作市', '13', 'jiaozuo', 'jiaozuo', 'jiaozuo');
INSERT INTO `la_city` VALUES ('129', '晋中市', '21', 'jinzhong', 'jz', 'jinzhong');
INSERT INTO `la_city` VALUES ('130', '佳木斯市', '15', 'jiamusi', 'jms', 'jiamusi');
INSERT INTO `la_city` VALUES ('131', '九江市', '28', 'jiujiang', 'jj', 'jiujiang');
INSERT INTO `la_city` VALUES ('132', '晋城市', '21', 'jincheng', 'jincheng', 'jincheng');
INSERT INTO `la_city` VALUES ('133', '荆门市', '26', 'jingmen', 'jingmen', 'jingmen');
INSERT INTO `la_city` VALUES ('134', '鸡西市', '15', 'jixi', 'jixi', 'jixi');
INSERT INTO `la_city` VALUES ('135', '吉安市', '28', 'jian', 'ja', 'jian');
INSERT INTO `la_city` VALUES ('136', '揭阳市', '5', 'jieyang', 'jy', 'jieyang');
INSERT INTO `la_city` VALUES ('137', '景德镇市', '28', 'jingdezhen', 'jdz', 'jingdezhen');
INSERT INTO `la_city` VALUES ('138', '济源市', '13', 'jiyuan', 'jiyuan', 'jiyuan');
INSERT INTO `la_city` VALUES ('139', '酒泉市', '23', 'jiuquan', 'jq', 'jiuquan');
INSERT INTO `la_city` VALUES ('140', '金昌市', '23', 'jinchang', 'jinchang', 'jinchang');
INSERT INTO `la_city` VALUES ('141', '嘉峪关市', '23', 'jiayuguan', 'jyg', 'jiayuguan');
INSERT INTO `la_city` VALUES ('142', '昆明市', '29', 'km', 'km', 'kunming');
INSERT INTO `la_city` VALUES ('143', '开封市', '13', 'kaifeng', 'kaifeng', 'kaifeng');
INSERT INTO `la_city` VALUES ('144', '喀什市', '30', 'kashi', 'ks', 'kashi');
INSERT INTO `la_city` VALUES ('145', '克拉玛依市', '30', 'kelamayi', 'klmy', 'kelamayi');
INSERT INTO `la_city` VALUES ('146', '库尔勒市', '33', 'kuerle', 'kel', '');
INSERT INTO `la_city` VALUES ('147', '克孜勒苏市', '30', 'kezilesu', 'kzls', 'kezilesu');
INSERT INTO `la_city` VALUES ('148', '兰州市', '23', 'lz', 'lz', 'lanzhou');
INSERT INTO `la_city` VALUES ('149', '拉萨市', '31', 'xz', 'lasa', 'lasa');
INSERT INTO `la_city` VALUES ('150', '廊坊市', '12', 'langfang', 'lf', 'langfang');
INSERT INTO `la_city` VALUES ('151', '临沂市', '16', 'linyi', 'linyi', 'linyi');
INSERT INTO `la_city` VALUES ('152', '洛阳市', '13', 'luoyang', 'luoyang', 'luoyang');
INSERT INTO `la_city` VALUES ('153', '聊城市', '16', 'liaocheng', 'lc', 'liaocheng');
INSERT INTO `la_city` VALUES ('154', '柳州市', '18', 'liuzhou', 'liuzhou', 'liuzhou');
INSERT INTO `la_city` VALUES ('155', '连云港市', '10', 'lianyungang', 'lyg', 'lianyungang');
INSERT INTO `la_city` VALUES ('156', '临汾市', '21', 'linfen', 'linfen', 'linfen');
INSERT INTO `la_city` VALUES ('157', '漯河市', '13', 'luohe', 'luohe', 'luohe');
INSERT INTO `la_city` VALUES ('158', '辽阳市', '9', 'liaoyang', 'liaoyang', 'liaoyang');
INSERT INTO `la_city` VALUES ('159', '乐山市', '6', 'leshan', 'ls', 'leshan');
INSERT INTO `la_city` VALUES ('160', '泸州市', '6', 'luzhou', 'luzhou', 'luzhou');
INSERT INTO `la_city` VALUES ('161', '六安市', '17', 'luan', 'la', 'luan');
INSERT INTO `la_city` VALUES ('162', '娄底市', '27', 'loudi', 'ld', 'loudi');
INSERT INTO `la_city` VALUES ('163', '莱芜市', '16', 'laiwu', 'lw', 'laiwu');
INSERT INTO `la_city` VALUES ('164', '龙岩市', '11', 'longyan', 'ly', 'longyan');
INSERT INTO `la_city` VALUES ('165', '吕梁市', '21', 'lvliang', 'lvliang', 'lvliang');
INSERT INTO `la_city` VALUES ('166', '丽水市', '7', 'lishui', 'lishui', 'lishui');
INSERT INTO `la_city` VALUES ('167', '凉山市', '6', 'liangshan', 'liangshan', 'liangshan');
INSERT INTO `la_city` VALUES ('168', '丽江市', '29', 'lijiang', 'lj', 'lijiang');
INSERT INTO `la_city` VALUES ('169', '六盘水市', '8', 'liupanshui', 'lps', 'liupanshui');
INSERT INTO `la_city` VALUES ('170', '辽源市', '14', 'liaoyuan', 'liaoyuan', 'liaoyuan');
INSERT INTO `la_city` VALUES ('171', '来宾市', '18', 'laibin', 'lb', 'laibin');
INSERT INTO `la_city` VALUES ('172', '临沧市', '29', 'lincang', 'lincang', 'lincang');
INSERT INTO `la_city` VALUES ('173', '陇南市', '23', 'longnan', 'ln', 'longnan');
INSERT INTO `la_city` VALUES ('174', '临夏市', '23', 'linxia', 'linxia', 'linxia');
INSERT INTO `la_city` VALUES ('175', '林芝市', '31', 'linzhi', 'linzhi', 'linzhi');
INSERT INTO `la_city` VALUES ('176', '绵阳市', '6', 'mianyang', 'mianyang', 'mianyang');
INSERT INTO `la_city` VALUES ('177', '牡丹江市', '15', 'mudanjiang', 'mdj', 'mudanjiang');
INSERT INTO `la_city` VALUES ('178', '茂名市', '5', 'maoming', 'mm', 'maoming');
INSERT INTO `la_city` VALUES ('179', '梅州市', '5', 'meizhou', 'mz', 'meizhou');
INSERT INTO `la_city` VALUES ('180', '马鞍山市', '17', 'maanshan', 'mas', 'maanshan');
INSERT INTO `la_city` VALUES ('181', '眉山市', '6', 'meishan', 'ms', 'meishan');
INSERT INTO `la_city` VALUES ('182', '南京市', '10', 'nj', 'nj', 'nanjing');
INSERT INTO `la_city` VALUES ('183', '宁波市', '7', 'nb', 'nb', 'ningbo');
INSERT INTO `la_city` VALUES ('184', '南宁市', '18', 'nn', 'nn', 'nanning');
INSERT INTO `la_city` VALUES ('185', '南昌市', '28', 'nc', 'nc', 'nanchang');
INSERT INTO `la_city` VALUES ('186', '南通市', '10', 'nantong', 'nt', 'nantong');
INSERT INTO `la_city` VALUES ('187', '南阳市', '13', 'nanyang', 'ny', 'nanyang');
INSERT INTO `la_city` VALUES ('188', '南充市', '6', 'nanchong', 'nanchong', 'nanchong');
INSERT INTO `la_city` VALUES ('189', '内江市', '6', 'neijiang', 'scnj', 'neijiang');
INSERT INTO `la_city` VALUES ('190', '南平市', '11', 'nanping', 'np', 'nanping');
INSERT INTO `la_city` VALUES ('191', '宁德市', '11', 'ningde', 'nd', 'ningde');
INSERT INTO `la_city` VALUES ('192', '怒江市', '29', 'nujiang', 'nujiang', 'nujiang');
INSERT INTO `la_city` VALUES ('193', '那曲市', '31', 'naqu', 'nq', 'naqu');
INSERT INTO `la_city` VALUES ('194', '平顶山市', '13', 'pingdingshan', 'pds', 'pingdingshan');
INSERT INTO `la_city` VALUES ('195', '濮阳市', '13', 'puyang', 'puyang', 'puyang');
INSERT INTO `la_city` VALUES ('196', '盘锦市', '9', 'panjin', 'pj', 'panjin');
INSERT INTO `la_city` VALUES ('197', '莆田市', '11', 'putian', 'pt', 'putian');
INSERT INTO `la_city` VALUES ('198', '攀枝花市', '6', 'panzhihua', 'panzhihua', 'panzhihua');
INSERT INTO `la_city` VALUES ('199', '萍乡市', '28', 'pingxiang', 'px', 'pingxiang');
INSERT INTO `la_city` VALUES ('200', '平凉市', '23', 'pingliang', 'pl', 'pingliang');
INSERT INTO `la_city` VALUES ('201', '普洱市', '29', 'puer', 'pe', 'puer');
INSERT INTO `la_city` VALUES ('202', '青岛市', '16', 'qd', 'qd', 'qingdao');
INSERT INTO `la_city` VALUES ('203', '秦皇岛市', '12', 'qinhuangdao', 'qhd', 'qinhuangdao');
INSERT INTO `la_city` VALUES ('204', '泉州市', '11', 'quanzhou', 'qz', 'quanzhou');
INSERT INTO `la_city` VALUES ('205', '齐齐哈尔市', '15', 'qiqihaer', 'qqhr', 'qiqihaer');
INSERT INTO `la_city` VALUES ('206', '清远市', '5', 'qingyuan', 'qingyuan', 'qingyuan');
INSERT INTO `la_city` VALUES ('207', '曲靖市', '29', 'qujing', 'qj', 'qujing');
INSERT INTO `la_city` VALUES ('208', '衢州市', '7', 'quzhou', 'quzhou', 'quzhou');
INSERT INTO `la_city` VALUES ('209', '庆阳市', '23', 'qingyang', 'qingyang', 'qingyang');
INSERT INTO `la_city` VALUES ('210', '七台河市', '15', 'qitaihe', 'qth', 'qitaihe');
INSERT INTO `la_city` VALUES ('211', '钦州市', '18', 'qinzhou', 'qinzhou', 'qinzhou');
INSERT INTO `la_city` VALUES ('212', '潜江市', '26', 'qianjiang', 'qianjiang', 'qianjiang');
INSERT INTO `la_city` VALUES ('213', '黔东南市', '8', 'qiandongnan', 'qdn', 'qiandongnan');
INSERT INTO `la_city` VALUES ('214', '黔南市', '8', 'qiannan', 'qn', 'qiannan');
INSERT INTO `la_city` VALUES ('215', '黔西南市', '8', 'qianxinan', 'qxn', 'qianxinan');
INSERT INTO `la_city` VALUES ('216', '日照市', '16', 'rizhao', 'rizhao', 'rizhao');
INSERT INTO `la_city` VALUES ('217', '日喀则市', '31', 'rikaze', 'rkz', 'rikaze');
INSERT INTO `la_city` VALUES ('218', '上海市', '2', 'sh', 'sh', 'shanghai');
INSERT INTO `la_city` VALUES ('219', '深圳市', '5', 'sz', 'sz', 'shenzhen');
INSERT INTO `la_city` VALUES ('220', '沈阳市', '9', 'sy', 'sy', 'shenyang');
INSERT INTO `la_city` VALUES ('221', '石家庄市', '12', 'sjz', 'sjz', 'shijiazhuang');
INSERT INTO `la_city` VALUES ('222', '苏州市', '10', 'su', 'su', 'suzhou');
INSERT INTO `la_city` VALUES ('223', '汕头市', '5', 'shantou', 'st', 'shantou');
INSERT INTO `la_city` VALUES ('224', '商丘市', '13', 'shangqiu', 'sq', 'shangqiu');
INSERT INTO `la_city` VALUES ('225', '三亚市', '19', 'sanya', 'sanya', 'sanya');
INSERT INTO `la_city` VALUES ('226', '宿迁市', '10', 'suqian', 'suqian', 'suqian');
INSERT INTO `la_city` VALUES ('227', '绍兴市', '7', 'shaoxing', 'sx', 'shaoxing');
INSERT INTO `la_city` VALUES ('228', '十堰市', '26', 'shiyan', 'shiyan', 'shiyan');
INSERT INTO `la_city` VALUES ('229', '四平市', '14', 'siping', 'sp', 'siping');
INSERT INTO `la_city` VALUES ('230', '三门峡市', '13', 'sanmenxia', 'smx', 'sanmenxia');
INSERT INTO `la_city` VALUES ('231', '邵阳市', '27', 'shaoyang', 'shaoyang', 'shaoyang');
INSERT INTO `la_city` VALUES ('232', '上饶市', '28', 'shangrao', 'sr', 'shangrao');
INSERT INTO `la_city` VALUES ('233', '遂宁市', '6', 'suining', 'suining', 'suining');
INSERT INTO `la_city` VALUES ('234', '三明市', '11', 'sanming', 'sm', 'sanming');
INSERT INTO `la_city` VALUES ('235', '绥化市', '15', 'suihua', 'suihua', 'suihua');
INSERT INTO `la_city` VALUES ('236', '石河子市', '30', 'shihezi', 'shz', 'shihezi');
INSERT INTO `la_city` VALUES ('237', '宿州市', '17', 'ahsuzhou', 'suzhou', 'sz');
INSERT INTO `la_city` VALUES ('238', '韶关市', '5', 'shaoguan', 'sg', 'shaoguan');
INSERT INTO `la_city` VALUES ('239', '松原市', '14', 'songyuan', 'songyuan', 'songyuan');
INSERT INTO `la_city` VALUES ('240', '随州市', '26', 'suizhou', 'suizhou', 'suizhou');
INSERT INTO `la_city` VALUES ('241', '汕尾市', '5', 'shanwei', 'sw', 'shanwei');
INSERT INTO `la_city` VALUES ('242', '双鸭山市', '15', 'shuangyashan', 'sys', 'shuangyashan');
INSERT INTO `la_city` VALUES ('243', '朔州市', '21', 'shuozhou', 'shuozhou', 'shuozhou');
INSERT INTO `la_city` VALUES ('244', '石嘴山市', '22', 'shizuishan', 'szs', 'shizuishan');
INSERT INTO `la_city` VALUES ('245', '商洛市', '24', 'shangluo', 'sl', 'shangluo');
INSERT INTO `la_city` VALUES ('246', '神农架市', '26', 'shennongjia', 'snj', 'shennongjia');
INSERT INTO `la_city` VALUES ('247', '山南市', '31', 'shannan', 'sn', 'shannan');
INSERT INTO `la_city` VALUES ('248', '天津市', '3', 'tj', 'tj', 'tianjin');
INSERT INTO `la_city` VALUES ('249', '太原市', '21', 'ty', 'ty', 'taiyuan');
INSERT INTO `la_city` VALUES ('250', '唐山市', '12', 'tangshan', 'ts', 'tangshan');
INSERT INTO `la_city` VALUES ('251', '泰安市', '16', 'taian', 'ta', 'taian');
INSERT INTO `la_city` VALUES ('252', '台州市', '7', 'zjtaizhou', 'tz', 'taizhou');
INSERT INTO `la_city` VALUES ('253', '泰州市', '10', 'jstaizhou', 'taizhou', 'tz');
INSERT INTO `la_city` VALUES ('254', '铁岭市', '9', 'tieling', 'tl', 'tieling');
INSERT INTO `la_city` VALUES ('255', '通辽市', '20', 'tongliao', 'tongliao', 'tongliao');
INSERT INTO `la_city` VALUES ('256', '通化市', '14', 'tonghua', 'th', 'tonghua');
INSERT INTO `la_city` VALUES ('257', '天水市', '23', 'tianshui', 'tianshui', 'tianshui');
INSERT INTO `la_city` VALUES ('258', '铜陵市', '17', 'tongling', 'tongling', 'tongling');
INSERT INTO `la_city` VALUES ('259', '铜川市', '24', 'tongchuan', 'tc', 'tongchuan');
INSERT INTO `la_city` VALUES ('260', '铜仁市', '8', 'tongren', 'tr', 'tongren');
INSERT INTO `la_city` VALUES ('261', '天门市', '33', 'tianmen', 'tm', 'tianmen');
INSERT INTO `la_city` VALUES ('262', '塔城市', '30', 'tacheng', '', 'tacheng');
INSERT INTO `la_city` VALUES ('263', '吐鲁番市', '30', 'tulufan', 'tlf', 'tulufan');
INSERT INTO `la_city` VALUES ('264', '图木舒克市', '33', 'tumushuke', 'tmsk', 'tumushuke');
INSERT INTO `la_city` VALUES ('265', '武汉市', '26', 'wh', 'wh', 'wuhan');
INSERT INTO `la_city` VALUES ('266', '无锡市', '10', 'wx', 'wx', 'wuxi');
INSERT INTO `la_city` VALUES ('267', '乌鲁木齐市', '30', 'xj', 'xj', 'wulumuqi');
INSERT INTO `la_city` VALUES ('268', '威海市', '16', 'wei', 'weihai', 'weihai');
INSERT INTO `la_city` VALUES ('269', '潍坊市', '16', 'weifang', 'wf', 'weifang');
INSERT INTO `la_city` VALUES ('270', '温州市', '7', 'wenzhou', 'wz', 'wenzhou');
INSERT INTO `la_city` VALUES ('271', '芜湖市', '17', 'wuhu', 'wuhu', 'wuhu');
INSERT INTO `la_city` VALUES ('272', '渭南市', '24', 'weinan', 'wn', 'weinan');
INSERT INTO `la_city` VALUES ('273', '乌海市', '20', 'wuhai', 'wuhai', 'wuhai');
INSERT INTO `la_city` VALUES ('274', '梧州市', '18', 'wuzhou', 'wuzhou', 'wuzhou');
INSERT INTO `la_city` VALUES ('275', '乌兰察布市', '20', 'wulanchabu', 'wlcb', 'wulanchabu');
INSERT INTO `la_city` VALUES ('276', '武威市', '23', 'wuwei', 'wuwei', 'wuwei');
INSERT INTO `la_city` VALUES ('277', '文山市', '29', 'wenshan', 'ws', 'wenshan');
INSERT INTO `la_city` VALUES ('278', '吴忠市', '22', 'wuzhong', 'wuzhong', 'wuzhong');
INSERT INTO `la_city` VALUES ('279', '五家渠市', '33', 'wujiaqu', 'wjq', 'wujiaqu');
INSERT INTO `la_city` VALUES ('280', '五指山市', '33', 'wuzhishan', 'wzs', 'wuzhishan');
INSERT INTO `la_city` VALUES ('281', '西安市', '24', 'xa', 'xa', 'xian');
INSERT INTO `la_city` VALUES ('282', '厦门市', '11', 'xm', 'xm', 'xiamen');
INSERT INTO `la_city` VALUES ('283', '西宁市', '25', 'xn', 'xn', 'xining');
INSERT INTO `la_city` VALUES ('284', '徐州市', '10', 'xuzhou', 'xz', 'xuzhou');
INSERT INTO `la_city` VALUES ('285', '咸阳市', '24', 'xianyang', 'xianyang', 'xianyang');
INSERT INTO `la_city` VALUES ('286', '邢台市', '12', 'xingtai', 'xt', 'xingtai');
INSERT INTO `la_city` VALUES ('287', '襄阳市', '26', 'xiangyang', 'xf', 'xiangfan');
INSERT INTO `la_city` VALUES ('288', '新乡市', '13', 'xinxiang', 'xx', 'xinxiang');
INSERT INTO `la_city` VALUES ('289', '湘潭市', '27', 'xiangtan', 'xiangtan', 'xiangtan');
INSERT INTO `la_city` VALUES ('290', '许昌市', '13', 'xuchang', 'xc', 'xuchang');
INSERT INTO `la_city` VALUES ('291', '信阳市', '13', 'xinyang', 'xy', 'xinyang');
INSERT INTO `la_city` VALUES ('292', '孝感市', '26', 'xiaogan', 'xiaogan', 'xiaogan');
INSERT INTO `la_city` VALUES ('293', '忻州市', '21', 'xinzhou', 'xinzhou', 'xinzhou');
INSERT INTO `la_city` VALUES ('294', '咸宁市', '26', 'xianning', 'xianning', 'xianning');
INSERT INTO `la_city` VALUES ('295', '新余市', '28', 'xinyu', 'xinyu', 'xinyu');
INSERT INTO `la_city` VALUES ('296', '宣城市', '17', 'xuancheng', 'xuancheng', 'xuancheng');
INSERT INTO `la_city` VALUES ('297', '仙桃市', '26', 'xiantao', 'xiantao', 'xiantao');
INSERT INTO `la_city` VALUES ('298', '锡林郭勒市', '20', 'xilinguole', '', 'xilinguole');
INSERT INTO `la_city` VALUES ('299', '湘西市', '27', 'xiangxi', 'xiangxi', 'xiangxi');
INSERT INTO `la_city` VALUES ('300', '兴安市', '20', 'xingan', '', '');
INSERT INTO `la_city` VALUES ('301', '西双版纳市', '29', 'xishuangbanna', 'bn', 'xishuangbanna');
INSERT INTO `la_city` VALUES ('302', '香港市', '33', 'xianggang', 'hk', '');
INSERT INTO `la_city` VALUES ('303', '银川市', '22', 'yc', 'yinchuan', 'yinchuan');
INSERT INTO `la_city` VALUES ('304', '宜昌市', '26', 'yichang', 'yc', 'yichang');
INSERT INTO `la_city` VALUES ('305', '烟台市', '16', 'yantai', 'yt', 'yantai');
INSERT INTO `la_city` VALUES ('306', '扬州市', '10', 'yangzhou', 'yz', 'yangzhou');
INSERT INTO `la_city` VALUES ('307', '盐城市', '10', 'yancheng', 'yancheng', 'yancheng');
INSERT INTO `la_city` VALUES ('308', '营口市', '9', 'yingkou', 'yk', 'yingkou');
INSERT INTO `la_city` VALUES ('309', '岳阳市', '27', 'yueyang', 'yy', 'yueyang');
INSERT INTO `la_city` VALUES ('310', '运城市', '21', 'yuncheng', 'yuncheng', 'yuncheng');
INSERT INTO `la_city` VALUES ('311', '榆林市', '24', 'sxyulin', 'yl', 'yulin');
INSERT INTO `la_city` VALUES ('312', '宜宾市', '6', 'yibin', 'yb', 'yibin');
INSERT INTO `la_city` VALUES ('313', '阳泉市', '21', 'yangquan', 'yq', 'yangquan');
INSERT INTO `la_city` VALUES ('314', '延安市', '24', 'yanan', 'yanan', 'yanan');
INSERT INTO `la_city` VALUES ('315', '益阳市', '27', 'yiyang', 'yiyang', 'yiyang');
INSERT INTO `la_city` VALUES ('316', '永州市', '27', 'yongzhou', 'yongzhou', 'yongzhou');
INSERT INTO `la_city` VALUES ('317', '玉林市', '18', 'gxyulin', 'yulin', 'yl');
INSERT INTO `la_city` VALUES ('318', '宜春市', '28', 'jxyichun', 'yichun', 'yc');
INSERT INTO `la_city` VALUES ('319', '阳江市', '5', 'yangjiang', 'yj', 'yangjiang');
INSERT INTO `la_city` VALUES ('320', '延边市', '14', 'yanbian', 'yanbian', 'yanbian');
INSERT INTO `la_city` VALUES ('321', '玉溪市', '29', 'yuxi', 'yx', 'yuxi');
INSERT INTO `la_city` VALUES ('322', '伊犁市', '30', 'yili', 'yili', 'yili');
INSERT INTO `la_city` VALUES ('323', '云浮市', '5', 'yunfu', 'yf', 'yunfu');
INSERT INTO `la_city` VALUES ('324', '伊春市', '15', 'hljyichun', 'yich', 'yichun');
INSERT INTO `la_city` VALUES ('325', '雅安市', '6', 'yaan', 'ya', 'yaan');
INSERT INTO `la_city` VALUES ('326', '鹰潭市', '28', 'yingtan', 'yingtan', 'yingtan');
INSERT INTO `la_city` VALUES ('327', '玉树市', '25', 'yushu', 'ys', 'yushu');
INSERT INTO `la_city` VALUES ('328', '郑州市', '13', 'zz', 'zz', 'zhengzhou');
INSERT INTO `la_city` VALUES ('329', '珠海市', '5', 'zhuhai', 'zh', 'zhuhai');
INSERT INTO `la_city` VALUES ('330', '淄博市', '16', 'zibo', 'zb', 'zibo');
INSERT INTO `la_city` VALUES ('331', '中山市', '5', 'zhongshan', 'zs', 'zhongshan');
INSERT INTO `la_city` VALUES ('332', '枣庄市', '16', 'zaozhuang', 'zaozhuang', 'zaozhuang');
INSERT INTO `la_city` VALUES ('333', '张家口市', '12', 'zhangjiakou', 'zjk', 'zhangjiakou');
INSERT INTO `la_city` VALUES ('334', '株洲市', '27', 'zhuzhou', 'zhuzhou', 'zhuzhou');
INSERT INTO `la_city` VALUES ('335', '镇江市', '10', 'zhenjiang', 'zj', 'zhenjiang');
INSERT INTO `la_city` VALUES ('336', '周口市', '13', 'zhoukou', 'zk', 'zhoukou');
INSERT INTO `la_city` VALUES ('337', '湛江市', '5', 'zhanjiang', 'zhanjiang', 'zhanjiang');
INSERT INTO `la_city` VALUES ('338', '驻马店市', '13', 'zhumadian', 'zmd', 'zhumadian');
INSERT INTO `la_city` VALUES ('339', '肇庆市', '5', 'zhaoqing', 'zq', 'zhaoqing');
INSERT INTO `la_city` VALUES ('340', '自贡市', '6', 'zigong', 'zg', 'zigong');
INSERT INTO `la_city` VALUES ('341', '遵义市', '8', 'zunyi', 'zunyi', 'zunyi');
INSERT INTO `la_city` VALUES ('342', '漳州市', '11', 'zhangzhou', 'zhangzhou', 'zhangzhou');
INSERT INTO `la_city` VALUES ('343', '舟山市', '7', 'zhoushan', 'zhoushan', 'zhoushan');
INSERT INTO `la_city` VALUES ('344', '张掖市', '23', 'zhangye', 'zhangye', 'zhangye');
INSERT INTO `la_city` VALUES ('345', '资阳市', '6', 'ziyang', 'zy', 'ziyang');
INSERT INTO `la_city` VALUES ('346', '张家界市', '27', 'zhangjiajie', 'zjj', 'zhangjiajie');
INSERT INTO `la_city` VALUES ('347', '昭通市', '29', 'zhaotong', 'zt', 'zhaotong');
INSERT INTO `la_city` VALUES ('348', '中卫市', '22', 'zhongwei', 'zw', 'zhongwei');
