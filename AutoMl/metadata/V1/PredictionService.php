<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/prediction_service.proto

namespace GPBMetadata\Google\Cloud\Automl\V1;

class PredictionService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1\AnnotationPayload::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1\DataItems::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1\Io::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa50e0a2f676f6f676c652f636c6f75642f6175746f6d6c2f76312f7072" .
            "6564696374696f6e5f736572766963652e70726f746f1216676f6f676c65" .
            "2e636c6f75642e6175746f6d6c2e76311a17676f6f676c652f6170692f63" .
            "6c69656e742e70726f746f1a19676f6f676c652f6170692f7265736f7572" .
            "63652e70726f746f1a2f676f6f676c652f636c6f75642f6175746f6d6c2f" .
            "76312f616e6e6f746174696f6e5f7061796c6f61642e70726f746f1a2767" .
            "6f6f676c652f636c6f75642f6175746f6d6c2f76312f646174615f697465" .
            "6d732e70726f746f1a1f676f6f676c652f636c6f75642f6175746f6d6c2f" .
            "76312f696f2e70726f746f1a23676f6f676c652f6c6f6e6772756e6e696e" .
            "672f6f7065726174696f6e732e70726f746f22ca010a0e50726564696374" .
            "52657175657374120c0a046e616d6518012001280912370a077061796c6f" .
            "616418022001280b32262e676f6f676c652e636c6f75642e6175746f6d6c" .
            "2e76312e4578616d706c655061796c6f616412420a06706172616d731803" .
            "2003280b32322e676f6f676c652e636c6f75642e6175746f6d6c2e76312e" .
            "50726564696374526571756573742e506172616d73456e7472791a2d0a0b" .
            "506172616d73456e747279120b0a036b6579180120012809120d0a057661" .
            "6c75651802200128093a023801228b020a0f50726564696374526573706f" .
            "6e7365123a0a077061796c6f616418012003280b32292e676f6f676c652e" .
            "636c6f75642e6175746f6d6c2e76312e416e6e6f746174696f6e5061796c" .
            "6f616412420a1270726570726f6365737365645f696e7075741803200128" .
            "0b32262e676f6f676c652e636c6f75642e6175746f6d6c2e76312e457861" .
            "6d706c655061796c6f616412470a086d6574616461746118022003280b32" .
            "352e676f6f676c652e636c6f75642e6175746f6d6c2e76312e5072656469" .
            "6374526573706f6e73652e4d65746164617461456e7472791a2f0a0d4d65" .
            "746164617461456e747279120b0a036b6579180120012809120d0a057661" .
            "6c75651802200128093a02380122ab020a13426174636850726564696374" .
            "52657175657374120c0a046e616d6518012001280912450a0c696e707574" .
            "5f636f6e66696718032001280b322f2e676f6f676c652e636c6f75642e61" .
            "75746f6d6c2e76312e426174636850726564696374496e707574436f6e66" .
            "696712470a0d6f75747075745f636f6e66696718042001280b32302e676f" .
            "6f676c652e636c6f75642e6175746f6d6c2e76312e426174636850726564" .
            "6963744f7574707574436f6e66696712470a06706172616d731805200328" .
            "0b32372e676f6f676c652e636c6f75642e6175746f6d6c2e76312e426174" .
            "636850726564696374526571756573742e506172616d73456e7472791a2d" .
            "0a0b506172616d73456e747279120b0a036b6579180120012809120d0a05" .
            "76616c75651802200128093a0238012291010a1242617463685072656469" .
            "6374526573756c74124a0a086d6574616461746118012003280b32382e67" .
            "6f6f676c652e636c6f75642e6175746f6d6c2e76312e4261746368507265" .
            "64696374526573756c742e4d65746164617461456e7472791a2f0a0d4d65" .
            "746164617461456e747279120b0a036b6579180120012809120d0a057661" .
            "6c75651802200128093a023801329b030a1150726564696374696f6e5365" .
            "72766963651299010a075072656469637412262e676f6f676c652e636c6f" .
            "75642e6175746f6d6c2e76312e50726564696374526571756573741a272e" .
            "676f6f676c652e636c6f75642e6175746f6d6c2e76312e50726564696374" .
            "526573706f6e7365223d82d3e493023722322f76312f7b6e616d653d7072" .
            "6f6a656374732f2a2f6c6f636174696f6e732f2a2f6d6f64656c732f2a7d" .
            "3a707265646963743a012a129e010a0c426174636850726564696374122b" .
            "2e676f6f676c652e636c6f75642e6175746f6d6c2e76312e426174636850" .
            "726564696374526571756573741a1d2e676f6f676c652e6c6f6e6772756e" .
            "6e696e672e4f7065726174696f6e224282d3e493023c22372f76312f7b6e" .
            "616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6d6f64" .
            "656c732f2a7d3a6261746368507265646963743a012a1a49ca4115617574" .
            "6f6d6c2e676f6f676c65617069732e636f6dd2412e68747470733a2f2f77" .
            "77772e676f6f676c65617069732e636f6d2f617574682f636c6f75642d70" .
            "6c6174666f726d42c2010a1a636f6d2e676f6f676c652e636c6f75642e61" .
            "75746f6d6c2e7631421650726564696374696f6e5365727669636550726f" .
            "746f50015a3c676f6f676c652e676f6c616e672e6f72672f67656e70726f" .
            "746f2f676f6f676c65617069732f636c6f75642f6175746f6d6c2f76313b" .
            "6175746f6d6caa0216476f6f676c652e436c6f75642e4175746f4d4c2e56" .
            "31ca0216476f6f676c655c436c6f75645c4175746f4d6c5c5631ea021947" .
            "6f6f676c653a3a436c6f75643a3a4175746f4d4c3a3a5631620670726f74" .
            "6f33"
        ), true);

        static::$is_initialized = true;
    }
}
