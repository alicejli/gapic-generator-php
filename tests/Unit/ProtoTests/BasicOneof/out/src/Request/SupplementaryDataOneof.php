<?php
/*
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/google/googleapis/blob/master/tests/Unit/ProtoTests/BasicOneof/basic-oneof.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Testing\BasicOneof\Request;

use Testing\BasicOneof\PartOfRequestA;

/** Wrapper class for the oneof supplementary_data defined in message  */
class SupplementaryDataOneof
{
    /**
     * The value for the field extra_description, if set.
     */
    private $extraDescription;

    /**
     * The value for the field extra_summary, if set.
     */
    private $extraSummary;

    /**
     * The value for the field extra_request, if set.
     */
    private $extraRequest;

    /**
     * The value for the field extra_index, if set.
     */
    private $extraIndex;

    /**
     * The value for the field extra_double, if set.
     */
    private $extraDouble;

    /**
     * The value for the field extra_float, if set.
     */
    private $extraFloat;

    /**
     * The value for the field extra_bool, if set.
     */
    private $extraBool;

    /**
     * Name of the field for which the oneof is set, as it appears in the protobuf in
     * lower_camel_case.
     */
    private $selectedOneofFieldName = '';

    /**
     * Sets this oneof to extra_description and updates its value.
     *
     * @param string $extraDescription The new value of this oneof.
     */
    public function setExtraDescription($extraDescription)
    {
        $this->extraDescription = $extraDescription;
        $this->selectedOneofFieldName = 'extra_description';
        return $this;
    }

    /**
     * Sets this oneof to extra_summary and updates its value.
     *
     * @param string $extraSummary The new value of this oneof.
     */
    public function setExtraSummary($extraSummary)
    {
        $this->extraSummary = $extraSummary;
        $this->selectedOneofFieldName = 'extra_summary';
        return $this;
    }

    /**
     * Sets this oneof to extra_request and updates its value.
     *
     * @param PartOfRequestA $extraRequest The new value of this oneof.
     */
    public function setExtraRequest($extraRequest)
    {
        $this->extraRequest = $extraRequest;
        $this->selectedOneofFieldName = 'extra_request';
        return $this;
    }

    /**
     * Sets this oneof to extra_index and updates its value.
     *
     * @param int $extraIndex The new value of this oneof.
     */
    public function setExtraIndex($extraIndex)
    {
        $this->extraIndex = $extraIndex;
        $this->selectedOneofFieldName = 'extra_index';
        return $this;
    }

    /**
     * Sets this oneof to extra_double and updates its value.
     *
     * @param float $extraDouble The new value of this oneof.
     */
    public function setExtraDouble($extraDouble)
    {
        $this->extraDouble = $extraDouble;
        $this->selectedOneofFieldName = 'extra_double';
        return $this;
    }

    /**
     * Sets this oneof to extra_float and updates its value.
     *
     * @param float $extraFloat The new value of this oneof.
     */
    public function setExtraFloat($extraFloat)
    {
        $this->extraFloat = $extraFloat;
        $this->selectedOneofFieldName = 'extra_float';
        return $this;
    }

    /**
     * Sets this oneof to extra_bool and updates its value.
     *
     * @param bool $extraBool The new value of this oneof.
     */
    public function setExtraBool($extraBool)
    {
        $this->extraBool = $extraBool;
        $this->selectedOneofFieldName = 'extra_bool';
        return $this;
    }

    /**
     * Returns true if this oneof is set to the field extra_description.
     */
    public function isExtraDescription()
    {
        return $this->selectedOneofFieldName === 'extra_description';
    }

    /**
     * Returns true if this oneof is set to the field extra_summary.
     */
    public function isExtraSummary()
    {
        return $this->selectedOneofFieldName === 'extra_summary';
    }

    /**
     * Returns true if this oneof is set to the field extra_request.
     */
    public function isExtraRequest()
    {
        return $this->selectedOneofFieldName === 'extra_request';
    }

    /**
     * Returns true if this oneof is set to the field extra_index.
     */
    public function isExtraIndex()
    {
        return $this->selectedOneofFieldName === 'extra_index';
    }

    /**
     * Returns true if this oneof is set to the field extra_double.
     */
    public function isExtraDouble()
    {
        return $this->selectedOneofFieldName === 'extra_double';
    }

    /**
     * Returns true if this oneof is set to the field extra_float.
     */
    public function isExtraFloat()
    {
        return $this->selectedOneofFieldName === 'extra_float';
    }

    /**
     * Returns true if this oneof is set to the field extra_bool.
     */
    public function isExtraBool()
    {
        return $this->selectedOneofFieldName === 'extra_bool';
    }

    /**
     * Returns $this->extraDescription if this oneof is set to the field
     * extra_description, null otherwise.
     */
    public function getExtraDescription()
    {
        return $this->isExtraDescription() ? $this->extraDescription : null;
    }

    /**
     * Returns $this->extraSummary if this oneof is set to the field extra_summary,
     * null otherwise.
     */
    public function getExtraSummary()
    {
        return $this->isExtraSummary() ? $this->extraSummary : null;
    }

    /**
     * Returns $this->extraRequest if this oneof is set to the field extra_request,
     * null otherwise.
     */
    public function getExtraRequest()
    {
        return $this->isExtraRequest() ? $this->extraRequest : null;
    }

    /**
     * Returns $this->extraIndex if this oneof is set to the field extra_index, null
     * otherwise.
     */
    public function getExtraIndex()
    {
        return $this->isExtraIndex() ? $this->extraIndex : null;
    }

    /**
     * Returns $this->extraDouble if this oneof is set to the field extra_double, null
     * otherwise.
     */
    public function getExtraDouble()
    {
        return $this->isExtraDouble() ? $this->extraDouble : null;
    }

    /**
     * Returns $this->extraFloat if this oneof is set to the field extra_float, null
     * otherwise.
     */
    public function getExtraFloat()
    {
        return $this->isExtraFloat() ? $this->extraFloat : null;
    }

    /**
     * Returns $this->extraBool if this oneof is set to the field extra_bool, null
     * otherwise.
     */
    public function getExtraBool()
    {
        return $this->isExtraBool() ? $this->extraBool : null;
    }
}
