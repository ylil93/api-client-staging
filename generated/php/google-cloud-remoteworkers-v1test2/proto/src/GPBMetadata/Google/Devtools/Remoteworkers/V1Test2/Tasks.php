<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/remoteworkers/v1test2/tasks.proto

namespace GPBMetadata\Google\Devtools\Remoteworkers\V1Test2;

class Tasks
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a800c0a31676f6f676c652f646576746f6f6c732f72656d6f7465776f72" .
            "6b6572732f763174657374322f7461736b732e70726f746f1225676f6f67" .
            "6c652e646576746f6f6c732e72656d6f7465776f726b6572732e76317465" .
            "7374321a19676f6f676c652f70726f746f6275662f616e792e70726f746f" .
            "1a20676f6f676c652f70726f746f6275662f6669656c645f6d61736b2e70" .
            "726f746f1a17676f6f676c652f7270632f7374617475732e70726f746f22" .
            "b1010a045461736b120c0a046e616d6518012001280912290a0b64657363" .
            "72697074696f6e18022001280b32142e676f6f676c652e70726f746f6275" .
            "662e416e7912430a046c6f677318032003280b32352e676f6f676c652e64" .
            "6576746f6f6c732e72656d6f7465776f726b6572732e763174657374322e" .
            "5461736b2e4c6f6773456e7472791a2b0a094c6f6773456e747279120b0a" .
            "036b6579180120012809120d0a0576616c75651802200128093a02380122" .
            "9a010a0a5461736b526573756c74120c0a046e616d651801200128091210" .
            "0a08636f6d706c65746518022001280812220a0673746174757318032001" .
            "280b32122e676f6f676c652e7270632e53746174757312240a066f757470" .
            "757418042001280b32142e676f6f676c652e70726f746f6275662e416e79" .
            "12220a046d65746118052001280b32142e676f6f676c652e70726f746f62" .
            "75662e416e79221e0a0e4765745461736b52657175657374120c0a046e61" .
            "6d6518012001280922ab010a175570646174655461736b526573756c7452" .
            "657175657374120c0a046e616d6518012001280912410a06726573756c74" .
            "18022001280b32312e676f6f676c652e646576746f6f6c732e72656d6f74" .
            "65776f726b6572732e763174657374322e5461736b526573756c74122f0a" .
            "0b7570646174655f6d61736b18032001280b321a2e676f6f676c652e7072" .
            "6f746f6275662e4669656c644d61736b120e0a06736f7572636518042001" .
            "280922310a114164645461736b4c6f6752657175657374120c0a046e616d" .
            "65180120012809120e0a066c6f675f696418022001280922240a12416464" .
            "5461736b4c6f67526573706f6e7365120e0a0668616e646c651801200128" .
            "093288040a055461736b731291010a074765745461736b12352e676f6f67" .
            "6c652e646576746f6f6c732e72656d6f7465776f726b6572732e76317465" .
            "7374322e4765745461736b526571756573741a2b2e676f6f676c652e6465" .
            "76746f6f6c732e72656d6f7465776f726b6572732e763174657374322e54" .
            "61736b222282d3e493021c121a2f763174657374322f7b6e616d653d2a2a" .
            "2f7461736b732f2a7d12b8010a105570646174655461736b526573756c74" .
            "123e2e676f6f676c652e646576746f6f6c732e72656d6f7465776f726b65" .
            "72732e763174657374322e5570646174655461736b526573756c74526571" .
            "756573741a312e676f6f676c652e646576746f6f6c732e72656d6f746577" .
            "6f726b6572732e763174657374322e5461736b526573756c74223182d3e4" .
            "93022b32212f763174657374322f7b6e616d653d2a2a2f7461736b732f2a" .
            "2f726573756c747d3a06726573756c7412af010a0a4164645461736b4c6f" .
            "6712382e676f6f676c652e646576746f6f6c732e72656d6f7465776f726b" .
            "6572732e763174657374322e4164645461736b4c6f67526571756573741a" .
            "392e676f6f676c652e646576746f6f6c732e72656d6f7465776f726b6572" .
            "732e763174657374322e4164645461736b4c6f67526573706f6e7365222c" .
            "82d3e493022622212f763174657374322f7b6e616d653d2a2a2f7461736b" .
            "732f2a7d3a6164644c6f673a012a42c2010a29636f6d2e676f6f676c652e" .
            "646576746f6f6c732e72656d6f7465776f726b6572732e76317465737432" .
            "421252656d6f7465576f726b6572735461736b7350015a52676f6f676c65" .
            "2e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069" .
            "732f646576746f6f6c732f72656d6f7465776f726b6572732f7631746573" .
            "74323b72656d6f7465776f726b657273a202025257aa0225476f6f676c65" .
            "2e446576546f6f6c732e52656d6f7465576f726b6572732e563154657374" .
            "32620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
