<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Aiplatform;

class LearningGenaiRootRoutingDecisionMetadataTokenLengthBased extends \Google\Collection
{
  protected $collection_key = 'modelMaxTokenMetadata';
  /**
   * @var LearningGenaiRootRoutingDecisionMetadataTokenLengthBasedModelInputTokenMetadata[]
   */
  public $modelInputTokenMetadata;
  protected $modelInputTokenMetadataType = LearningGenaiRootRoutingDecisionMetadataTokenLengthBasedModelInputTokenMetadata::class;
  protected $modelInputTokenMetadataDataType = 'array';
  /**
   * @var LearningGenaiRootRoutingDecisionMetadataTokenLengthBasedModelMaxTokenMetadata[]
   */
  public $modelMaxTokenMetadata;
  protected $modelMaxTokenMetadataType = LearningGenaiRootRoutingDecisionMetadataTokenLengthBasedModelMaxTokenMetadata::class;
  protected $modelMaxTokenMetadataDataType = 'array';

  /**
   * @param LearningGenaiRootRoutingDecisionMetadataTokenLengthBasedModelInputTokenMetadata[]
   */
  public function setModelInputTokenMetadata($modelInputTokenMetadata)
  {
    $this->modelInputTokenMetadata = $modelInputTokenMetadata;
  }
  /**
   * @return LearningGenaiRootRoutingDecisionMetadataTokenLengthBasedModelInputTokenMetadata[]
   */
  public function getModelInputTokenMetadata()
  {
    return $this->modelInputTokenMetadata;
  }
  /**
   * @param LearningGenaiRootRoutingDecisionMetadataTokenLengthBasedModelMaxTokenMetadata[]
   */
  public function setModelMaxTokenMetadata($modelMaxTokenMetadata)
  {
    $this->modelMaxTokenMetadata = $modelMaxTokenMetadata;
  }
  /**
   * @return LearningGenaiRootRoutingDecisionMetadataTokenLengthBasedModelMaxTokenMetadata[]
   */
  public function getModelMaxTokenMetadata()
  {
    return $this->modelMaxTokenMetadata;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LearningGenaiRootRoutingDecisionMetadataTokenLengthBased::class, 'Google_Service_Aiplatform_LearningGenaiRootRoutingDecisionMetadataTokenLengthBased');
