<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1/language_service.proto

namespace GPBMetadata\Google\Cloud\Language\V1;

class LanguageService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad9380a2f676f6f676c652f636c6f75642f6c616e67756167652f76312f" .
            "6c616e67756167655f736572766963652e70726f746f1218676f6f676c65" .
            "2e636c6f75642e6c616e67756167652e763122c3010a08446f63756d656e" .
            "7412350a047479706518012001280e32272e676f6f676c652e636c6f7564" .
            "2e6c616e67756167652e76312e446f63756d656e742e5479706512110a07" .
            "636f6e74656e74180220012809480012190a0f6763735f636f6e74656e74" .
            "5f757269180320012809480012100a086c616e6775616765180420012809" .
            "22360a045479706512140a10545950455f554e5350454349464945441000" .
            "120e0a0a504c41494e5f54455854100112080a0448544d4c100242080a06" .
            "736f7572636522740a0853656e74656e636512300a047465787418012001" .
            "280b32222e676f6f676c652e636c6f75642e6c616e67756167652e76312e" .
            "546578745370616e12360a0973656e74696d656e7418022001280b32232e" .
            "676f6f676c652e636c6f75642e6c616e67756167652e76312e53656e7469" .
            "6d656e7422be030a06456e74697479120c0a046e616d6518012001280912" .
            "330a047479706518022001280e32252e676f6f676c652e636c6f75642e6c" .
            "616e67756167652e76312e456e746974792e5479706512400a086d657461" .
            "6461746118032003280b322e2e676f6f676c652e636c6f75642e6c616e67" .
            "756167652e76312e456e746974792e4d65746164617461456e7472791210" .
            "0a0873616c69656e636518042001280212390a086d656e74696f6e731805" .
            "2003280b32272e676f6f676c652e636c6f75642e6c616e67756167652e76" .
            "312e456e746974794d656e74696f6e12360a0973656e74696d656e741806" .
            "2001280b32232e676f6f676c652e636c6f75642e6c616e67756167652e76" .
            "312e53656e74696d656e741a2f0a0d4d65746164617461456e747279120b" .
            "0a036b6579180120012809120d0a0576616c75651802200128093a023801" .
            "22790a0454797065120b0a07554e4b4e4f574e1000120a0a06504552534f" .
            "4e1001120c0a084c4f434154494f4e100212100a0c4f5247414e495a4154" .
            "494f4e100312090a054556454e541004120f0a0b574f524b5f4f465f4152" .
            "54100512110a0d434f4e53554d45525f474f4f44100612090a054f544845" .
            "52100722cb010a05546f6b656e12300a047465787418012001280b32222e" .
            "676f6f676c652e636c6f75642e6c616e67756167652e76312e5465787453" .
            "70616e123e0a0e706172745f6f665f73706565636818022001280b32262e" .
            "676f6f676c652e636c6f75642e6c616e67756167652e76312e506172744f" .
            "6653706565636812410a0f646570656e64656e63795f6564676518032001" .
            "280b32282e676f6f676c652e636c6f75642e6c616e67756167652e76312e" .
            "446570656e64656e637945646765120d0a056c656d6d6118042001280922" .
            "2d0a0953656e74696d656e7412110a096d61676e69747564651802200128" .
            "02120d0a0573636f726518032001280222a3100a0c506172744f66537065" .
            "65636812370a0374616718012001280e322a2e676f6f676c652e636c6f75" .
            "642e6c616e67756167652e76312e506172744f665370656563682e546167" .
            "123d0a0661737065637418022001280e322d2e676f6f676c652e636c6f75" .
            "642e6c616e67756167652e76312e506172744f665370656563682e417370" .
            "65637412390a046361736518032001280e322b2e676f6f676c652e636c6f" .
            "75642e6c616e67756167652e76312e506172744f665370656563682e4361" .
            "736512390a04666f726d18042001280e322b2e676f6f676c652e636c6f75" .
            "642e6c616e67756167652e76312e506172744f665370656563682e466f72" .
            "6d123d0a0667656e64657218052001280e322d2e676f6f676c652e636c6f" .
            "75642e6c616e67756167652e76312e506172744f665370656563682e4765" .
            "6e64657212390a046d6f6f6418062001280e322b2e676f6f676c652e636c" .
            "6f75642e6c616e67756167652e76312e506172744f665370656563682e4d" .
            "6f6f64123d0a066e756d62657218072001280e322d2e676f6f676c652e63" .
            "6c6f75642e6c616e67756167652e76312e506172744f665370656563682e" .
            "4e756d626572123d0a06706572736f6e18082001280e322d2e676f6f676c" .
            "652e636c6f75642e6c616e67756167652e76312e506172744f6653706565" .
            "63682e506572736f6e123d0a0670726f70657218092001280e322d2e676f" .
            "6f676c652e636c6f75642e6c616e67756167652e76312e506172744f6653" .
            "70656563682e50726f70657212470a0b7265636970726f63697479180a20" .
            "01280e32322e676f6f676c652e636c6f75642e6c616e67756167652e7631" .
            "2e506172744f665370656563682e5265636970726f63697479123b0a0574" .
            "656e7365180b2001280e322c2e676f6f676c652e636c6f75642e6c616e67" .
            "756167652e76312e506172744f665370656563682e54656e7365123b0a05" .
            "766f696365180c2001280e322c2e676f6f676c652e636c6f75642e6c616e" .
            "67756167652e76312e506172744f665370656563682e566f696365228d01" .
            "0a03546167120b0a07554e4b4e4f574e100012070a0341444a100112070a" .
            "03414450100212070a03414456100312080a04434f4e4a100412070a0344" .
            "4554100512080a044e4f554e100612070a034e554d100712080a0450524f" .
            "4e100812070a03505254100912090a0550554e4354100a12080a04564552" .
            "42100b12050a0158100c12090a054146464958100d224f0a064173706563" .
            "7412120a0e4153504543545f554e4b4e4f574e1000120e0a0a5045524645" .
            "4354495645100112100a0c494d504552464543544956451002120f0a0b50" .
            "524f4752455353495645100322f8010a044361736512100a0c434153455f" .
            "554e4b4e4f574e1000120e0a0a414343555341544956451001120d0a0941" .
            "445645524249414c100212110a0d434f4d504c454d454e54495645100312" .
            "0a0a064441544956451004120c0a0847454e4954495645100512100a0c49" .
            "4e535452554d454e54414c1006120c0a084c4f4341544956451007120e0a" .
            "0a4e4f4d494e41544956451008120b0a074f424c495155451009120d0a09" .
            "504152544954495645100a12110a0d505245504f534954494f4e414c100b" .
            "12120a0e5245464c45584956455f43415345100c12110a0d52454c415449" .
            "56455f43415345100d120c0a08564f434154495645100e22af010a04466f" .
            "726d12100a0c464f524d5f554e4b4e4f574e1000120c0a0841444e4f4d49" .
            "414c1001120d0a09415558494c49415259100212120a0e434f4d504c454d" .
            "454e54495a4552100312100a0c46494e414c5f454e44494e471004120a0a" .
            "06474552554e441005120a0a065245414c49531006120c0a084952524541" .
            "4c4953100712090a0553484f5254100812080a044c4f4e47100912090a05" .
            "4f52444552100a120c0a085350454349464943100b22450a0647656e6465" .
            "7212120a0e47454e4445525f554e4b4e4f574e1000120c0a0846454d494e" .
            "494e451001120d0a094d415343554c494e451002120a0a064e4555544552" .
            "1003227f0a044d6f6f6412100a0c4d4f4f445f554e4b4e4f574e10001214" .
            "0a10434f4e444954494f4e414c5f4d4f4f441001120e0a0a494d50455241" .
            "544956451002120e0a0a494e4449434154495645100312110a0d494e5445" .
            "52524f4741544956451004120b0a074a5553534956451005120f0a0b5355" .
            "424a554e4354495645100622400a064e756d62657212120a0e4e554d4245" .
            "525f554e4b4e4f574e1000120c0a0853494e47554c41521001120a0a0650" .
            "4c5552414c100212080a044455414c100322540a06506572736f6e12120a" .
            "0e504552534f4e5f554e4b4e4f574e100012090a0546495253541001120a" .
            "0a065345434f4e44100212090a055448495244100312140a105245464c45" .
            "584956455f504552534f4e100422380a0650726f70657212120a0e50524f" .
            "5045525f554e4b4e4f574e1000120a0a0650524f5045521001120e0a0a4e" .
            "4f545f50524f5045521002224a0a0b5265636970726f6369747912170a13" .
            "5245434950524f434954595f554e4b4e4f574e1000120e0a0a5245434950" .
            "524f43414c100112120a0e4e4f4e5f5245434950524f43414c100222730a" .
            "0554656e736512110a0d54454e53455f554e4b4e4f574e100012150a1143" .
            "4f4e444954494f4e414c5f54454e53451001120a0a064655545552451002" .
            "12080a04504153541003120b0a0750524553454e541004120d0a09494d50" .
            "4552464543541005120e0a0a504c5550455246454354100622420a05566f" .
            "69636512110a0d564f4943455f554e4b4e4f574e1000120a0a0641435449" .
            "56451001120d0a094341555341544956451002120b0a0750415353495645" .
            "10032295080a0e446570656e64656e63794564676512180a10686561645f" .
            "746f6b656e5f696e646578180120012805123d0a056c6162656c18022001" .
            "280e322e2e676f6f676c652e636c6f75642e6c616e67756167652e76312e" .
            "446570656e64656e6379456467652e4c6162656c22a9070a054c6162656c" .
            "120b0a07554e4b4e4f574e1000120a0a06414242524556100112090a0541" .
            "434f4d50100212090a05414456434c1003120a0a064144564d4f44100412" .
            "080a04414d4f44100512090a054150504f53100612080a04415454521007" .
            "12070a034155581008120b0a0741555850415353100912060a024343100a" .
            "12090a0543434f4d50100b12080a04434f4e4a100c12090a05435355424a" .
            "100d120d0a09435355424a50415353100e12070a03444550100f12070a03" .
            "4445541010120d0a09444953434f55525345101112080a04444f424a1012" .
            "12080a044558504c1013120c0a08474f455357495448101412080a04494f" .
            "424a101512080a044d41524b101612070a034d5745101712070a034d5756" .
            "101812070a034e4547101912060a024e4e101a120c0a084e504144564d4f" .
            "44101b12090a054e5355424a101c120d0a094e5355424a50415353101d12" .
            "070a034e554d101e120a0a064e554d424552101f12050a01501020120d0a" .
            "095041524154415849531021120b0a07504152544d4f44102212090a0550" .
            "434f4d50102312080a04504f424a102412080a04504f53531025120b0a07" .
            "504f53544e45471026120b0a07505245434f4d501027120b0a0750524543" .
            "4f4e4a1028120a0a06505245444554102912080a0450524546102a12080a" .
            "0450524550102b12090a0550524f4e4c102c12070a03505254102d12060a" .
            "025053102e120c0a085155414e544d4f44102f12090a0552434d4f441030" .
            "120c0a0852434d4f4452454c103112090a055244524f50103212070a0352" .
            "45461033120b0a0752454d4e414e541034120e0a0a5245504152414e4455" .
            "4d103512080a04524f4f54103612080a04534e554d103712080a04535546" .
            "46103812080a04544d4f44103912090a05544f504943103a12080a04564d" .
            "4f44103b120c0a08564f434154495645103c12090a0558434f4d50103d12" .
            "0a0a06535546464958103e12090a055449544c45103f120c0a0841445650" .
            "484d4f441040120b0a0741555843415553104112090a0541555856561042" .
            "12090a0544544d4f441043120b0a07464f524549474e104412060a024b57" .
            "104512080a044c495354104612080a044e4f4d431047120c0a084e4f4d43" .
            "5355424a104812100a0c4e4f4d435355424a50415353104912080a044e55" .
            "4d43104a12070a03434f50104b120e0a0a4449534c4f4341544544104c12" .
            "070a03415350104d12080a04474d4f44104e12080a04474f424a104f120a" .
            "0a06494e464d4f44105012070a034d4553105112090a054e434f4d501052" .
            "22e7010a0d456e746974794d656e74696f6e12300a047465787418012001" .
            "280b32222e676f6f676c652e636c6f75642e6c616e67756167652e76312e" .
            "546578745370616e123a0a047479706518022001280e322c2e676f6f676c" .
            "652e636c6f75642e6c616e67756167652e76312e456e746974794d656e74" .
            "696f6e2e5479706512360a0973656e74696d656e7418032001280b32232e" .
            "676f6f676c652e636c6f75642e6c616e67756167652e76312e53656e7469" .
            "6d656e7422300a045479706512100a0c545950455f554e4b4e4f574e1000" .
            "120a0a0650524f5045521001120a0a06434f4d4d4f4e100222310a085465" .
            "78745370616e120f0a07636f6e74656e7418012001280912140a0c626567" .
            "696e5f6f6666736574180220012805228e010a17416e616c797a6553656e" .
            "74696d656e745265717565737412340a08646f63756d656e741801200128" .
            "0b32222e676f6f676c652e636c6f75642e6c616e67756167652e76312e44" .
            "6f63756d656e74123d0a0d656e636f64696e675f7479706518022001280e" .
            "32262e676f6f676c652e636c6f75642e6c616e67756167652e76312e456e" .
            "636f64696e675479706522a4010a18416e616c797a6553656e74696d656e" .
            "74526573706f6e7365123f0a12646f63756d656e745f73656e74696d656e" .
            "7418012001280b32232e676f6f676c652e636c6f75642e6c616e67756167" .
            "652e76312e53656e74696d656e7412100a086c616e677561676518022001" .
            "280912350a0973656e74656e63657318032003280b32222e676f6f676c65" .
            "2e636c6f75642e6c616e67756167652e76312e53656e74656e6365229401" .
            "0a1d416e616c797a65456e7469747953656e74696d656e74526571756573" .
            "7412340a08646f63756d656e7418012001280b32222e676f6f676c652e63" .
            "6c6f75642e6c616e67756167652e76312e446f63756d656e74123d0a0d65" .
            "6e636f64696e675f7479706518022001280e32262e676f6f676c652e636c" .
            "6f75642e6c616e67756167652e76312e456e636f64696e67547970652266" .
            "0a1e416e616c797a65456e7469747953656e74696d656e74526573706f6e" .
            "736512320a08656e74697469657318012003280b32202e676f6f676c652e" .
            "636c6f75642e6c616e67756167652e76312e456e7469747912100a086c61" .
            "6e6775616765180220012809228d010a16416e616c797a65456e74697469" .
            "65735265717565737412340a08646f63756d656e7418012001280b32222e" .
            "676f6f676c652e636c6f75642e6c616e67756167652e76312e446f63756d" .
            "656e74123d0a0d656e636f64696e675f7479706518022001280e32262e67" .
            "6f6f676c652e636c6f75642e6c616e67756167652e76312e456e636f6469" .
            "6e6754797065225f0a17416e616c797a65456e746974696573526573706f" .
            "6e736512320a08656e74697469657318012003280b32202e676f6f676c65" .
            "2e636c6f75642e6c616e67756167652e76312e456e7469747912100a086c" .
            "616e6775616765180220012809228b010a14416e616c797a6553796e7461" .
            "785265717565737412340a08646f63756d656e7418012001280b32222e67" .
            "6f6f676c652e636c6f75642e6c616e67756167652e76312e446f63756d65" .
            "6e74123d0a0d656e636f64696e675f7479706518022001280e32262e676f" .
            "6f676c652e636c6f75642e6c616e67756167652e76312e456e636f64696e" .
            "67547970652291010a15416e616c797a6553796e746178526573706f6e73" .
            "6512350a0973656e74656e63657318012003280b32222e676f6f676c652e" .
            "636c6f75642e6c616e67756167652e76312e53656e74656e6365122f0a06" .
            "746f6b656e7318022003280b321f2e676f6f676c652e636c6f75642e6c61" .
            "6e67756167652e76312e546f6b656e12100a086c616e6775616765180320" .
            "01280922d9020a13416e6e6f74617465546578745265717565737412340a" .
            "08646f63756d656e7418012001280b32222e676f6f676c652e636c6f7564" .
            "2e6c616e67756167652e76312e446f63756d656e7412480a086665617475" .
            "72657318022001280b32362e676f6f676c652e636c6f75642e6c616e6775" .
            "6167652e76312e416e6e6f7461746554657874526571756573742e466561" .
            "7475726573123d0a0d656e636f64696e675f7479706518032001280e3226" .
            "2e676f6f676c652e636c6f75642e6c616e67756167652e76312e456e636f" .
            "64696e67547970651a82010a08466561747572657312160a0e6578747261" .
            "63745f73796e74617818012001280812180a10657874726163745f656e74" .
            "697469657318022001280812220a1a657874726163745f646f63756d656e" .
            "745f73656e74696d656e7418032001280812200a18657874726163745f65" .
            "6e746974795f73656e74696d656e741804200128082285020a14416e6e6f" .
            "7461746554657874526573706f6e736512350a0973656e74656e63657318" .
            "012003280b32222e676f6f676c652e636c6f75642e6c616e67756167652e" .
            "76312e53656e74656e6365122f0a06746f6b656e7318022003280b321f2e" .
            "676f6f676c652e636c6f75642e6c616e67756167652e76312e546f6b656e" .
            "12320a08656e74697469657318032003280b32202e676f6f676c652e636c" .
            "6f75642e6c616e67756167652e76312e456e74697479123f0a12646f6375" .
            "6d656e745f73656e74696d656e7418042001280b32232e676f6f676c652e" .
            "636c6f75642e6c616e67756167652e76312e53656e74696d656e7412100a" .
            "086c616e67756167651805200128092a380a0c456e636f64696e67547970" .
            "6512080a044e4f4e45100012080a0455544638100112090a055554463136" .
            "100212090a055554463332100332cc060a0f4c616e677561676553657276" .
            "69636512a4010a10416e616c797a6553656e74696d656e7412312e676f6f" .
            "676c652e636c6f75642e6c616e67756167652e76312e416e616c797a6553" .
            "656e74696d656e74526571756573741a322e676f6f676c652e636c6f7564" .
            "2e6c616e67756167652e76312e416e616c797a6553656e74696d656e7452" .
            "6573706f6e7365222982d3e4930223221e2f76312f646f63756d656e7473" .
            "3a616e616c797a6553656e74696d656e743a012a12a0010a0f416e616c79" .
            "7a65456e74697469657312302e676f6f676c652e636c6f75642e6c616e67" .
            "756167652e76312e416e616c797a65456e74697469657352657175657374" .
            "1a312e676f6f676c652e636c6f75642e6c616e67756167652e76312e416e" .
            "616c797a65456e746974696573526573706f6e7365222882d3e493022222" .
            "1d2f76312f646f63756d656e74733a616e616c797a65456e746974696573" .
            "3a012a12bc010a16416e616c797a65456e7469747953656e74696d656e74" .
            "12372e676f6f676c652e636c6f75642e6c616e67756167652e76312e416e" .
            "616c797a65456e7469747953656e74696d656e74526571756573741a382e" .
            "676f6f676c652e636c6f75642e6c616e67756167652e76312e416e616c79" .
            "7a65456e7469747953656e74696d656e74526573706f6e7365222f82d3e4" .
            "93022922242f76312f646f63756d656e74733a616e616c797a65456e7469" .
            "747953656e74696d656e743a012a1298010a0d416e616c797a6553796e74" .
            "6178122e2e676f6f676c652e636c6f75642e6c616e67756167652e76312e" .
            "416e616c797a6553796e746178526571756573741a2f2e676f6f676c652e" .
            "636c6f75642e6c616e67756167652e76312e416e616c797a6553796e7461" .
            "78526573706f6e7365222682d3e4930220221b2f76312f646f63756d656e" .
            "74733a616e616c797a6553796e7461783a012a1294010a0c416e6e6f7461" .
            "746554657874122d2e676f6f676c652e636c6f75642e6c616e6775616765" .
            "2e76312e416e6e6f7461746554657874526571756573741a2e2e676f6f67" .
            "6c652e636c6f75642e6c616e67756167652e76312e416e6e6f7461746554" .
            "657874526573706f6e7365222582d3e493021f221a2f76312f646f63756d" .
            "656e74733a616e6e6f74617465546578743a012a42780a1c636f6d2e676f" .
            "6f676c652e636c6f75642e6c616e67756167652e763142144c616e677561" .
            "67655365727669636550726f746f50015a40676f6f676c652e676f6c616e" .
            "672e6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f75" .
            "642f6c616e67756167652f76313b6c616e6775616765620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
