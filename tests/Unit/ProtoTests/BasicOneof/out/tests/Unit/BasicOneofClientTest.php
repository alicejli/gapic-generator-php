<?php
/*
 * Copyright 2022 Google LLC
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
 * This file was automatically generated - do not edit!
 */

namespace Testing\BasicOneof\Tests\Unit;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\Testing\GeneratedTest;

use Google\ApiCore\Testing\MockTransport;
use Google\Rpc\Code;
use stdClass;
use Testing\BasicOneof\BasicOneofClient;
use Testing\BasicOneof\Request;
use Testing\BasicOneof\Request\Other;
use Testing\BasicOneof\Request\SupplementaryDataOneof;
use Testing\BasicOneof\Response;

/**
 * @group basiconeof
 *
 * @group gapic
 */
class BasicOneofClientTest extends GeneratedTest
{
    /**
     * @return TransportInterface
     */
    private function createTransport($deserialize = null)
    {
        return new MockTransport($deserialize);
    }

    /**
     * @return CredentialsWrapper
     */
    private function createCredentials()
    {
        return $this->getMockBuilder(CredentialsWrapper::class)->disableOriginalConstructor()->getMock();
    }

    /**
     * @return BasicOneofClient
     */
    private function createClient(array $options = [])
    {
        $options += [
            'credentials' => $this->createCredentials(),
        ];
        return new BasicOneofClient($options);
    }

    /**
     * @test
     */
    public function aMethodTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new Response();
        $transport->addResponse($expectedResponse);
        // Mock request
        $supplementaryData = new SupplementaryDataOneof();
        $supplementaryData->setExtraDescription('extraDescription-1352933811');
        $other = new Other();
        $otherFirst = 'otherFirst-205632128';
        $other->setFirst($otherFirst);
        $response = $client->aMethod($supplementaryData, $other);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/testing.basiconeof.BasicOneof/AMethod', $actualFuncCall);
        $actualValue = $actualRequestObject->getExtraDescription();
        $this->assertTrue($supplementaryData->isExtraDescription());
        $actualValue = $actualRequestObject->getOther();
        $this->assertProtobufEquals($other, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /**
     * @test
     */
    public function aMethodExceptionTest()
    {
        $transport = $this->createTransport();
        $client = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $supplementaryData = new SupplementaryDataOneof();
        $supplementaryData->setExtraDescription('extraDescription-1352933811');
        $other = new Other();
        $otherFirst = 'otherFirst-205632128';
        $other->setFirst($otherFirst);
        try {
            $client->aMethod($supplementaryData, $other);
            // If the $client method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }
}
