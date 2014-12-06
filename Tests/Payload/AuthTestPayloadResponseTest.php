<?php

namespace CL\Slack\Tests\Payload;

use CL\Slack\Payload\AuthTestPayloadResponse;
use CL\Slack\Payload\PayloadResponseInterface;

class AuthTestPayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * @inheritdoc
     */
    protected function getResponseData()
    {
        return [
            'user'    => 'acme_user',
            'user_id' => 'U1234567',
            'team'    => 'acme_team',
            'team_id' => 'T1234567',
        ];
    }

    /**
     * @inheritdoc
     */
    protected function getResponseClass()
    {
        return 'CL\Slack\Payload\AuthTestPayloadResponse';
    }

    /**
     * {@inheritdoc}
     *
     * @param array                   $responseData
     * @param AuthTestPayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $this->assertEquals($payloadResponse->getUserId(), $responseData['user_id']);
        $this->assertEquals($payloadResponse->getUsername(), $responseData['user']);
        $this->assertEquals($payloadResponse->getTeamId(), $responseData['team_id']);
        $this->assertEquals($payloadResponse->getTeam(), $responseData['team']);
    }
}