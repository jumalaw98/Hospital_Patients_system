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

namespace Google\Service\AuthorizedBuyersMarketplace;

class FrequencyCap extends \Google\Model
{
  public $maxImpressions;
  public $timeUnitType;
  public $timeUnitsCount;

  public function setMaxImpressions($maxImpressions)
  {
    $this->maxImpressions = $maxImpressions;
  }
  public function getMaxImpressions()
  {
    return $this->maxImpressions;
  }
  public function setTimeUnitType($timeUnitType)
  {
    $this->timeUnitType = $timeUnitType;
  }
  public function getTimeUnitType()
  {
    return $this->timeUnitType;
  }
  public function setTimeUnitsCount($timeUnitsCount)
  {
    $this->timeUnitsCount = $timeUnitsCount;
  }
  public function getTimeUnitsCount()
  {
    return $this->timeUnitsCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FrequencyCap::class, 'Google_Service_AuthorizedBuyersMarketplace_FrequencyCap');
