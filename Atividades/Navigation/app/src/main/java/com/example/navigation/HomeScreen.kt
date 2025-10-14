package com.example.navigation

import androidx.compose.foundation.layout.Arrangement
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.Row
import androidx.compose.foundation.layout.Spacer
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.fillMaxWidth
import androidx.compose.foundation.layout.padding
import androidx.compose.foundation.layout.width
import androidx.compose.material.icons.Icons
import androidx.compose.material.icons.filled.Check
import androidx.compose.material.icons.filled.Delete
import androidx.compose.material3.Button
import androidx.compose.material3.ButtonDefaults
import androidx.compose.material3.Icon
import androidx.compose.material3.IconButton
import androidx.compose.material3.OutlinedTextField
import androidx.compose.material3.OutlinedTextFieldDefaults
import androidx.compose.material3.Text
import androidx.compose.runtime.Composable
import androidx.compose.runtime.mutableStateOf
import androidx.compose.runtime.remember
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.text.font.FontWeight
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import androidx.navigation.NavController

@Composable
fun HomeScreen(navController: NavController) {
    val novaTarefa = remember { mutableStateOf("") }

    Column(
        modifier = Modifier
            .fillMaxSize()
            .padding(16.dp)
    ) {
        Text(
            text = "Tarefas",
            fontSize = 28.sp,
            fontWeight = FontWeight.Bold,
            color = Color(0xFF1976D2),
            modifier = Modifier.align(Alignment.CenterHorizontally)
        )

        OutlinedTextField(
            value = novaTarefa.value,
            onValueChange = { novaTarefa.value = it },
            label = { Text("Nova tarefa", color = Color(0xFF1976D2)) },
            modifier = Modifier.fillMaxWidth(),
            colors = OutlinedTextFieldDefaults.colors(
                focusedBorderColor = Color(0xFF1976D2)
            )
        )

        Row(
            modifier = Modifier.fillMaxWidth(),
            horizontalArrangement = Arrangement.Center
        ) {
            Button(
                onClick = { },
                colors = ButtonDefaults.buttonColors(containerColor = Color(0xFF1976D2))
            ) {
                Text("Adicionar Tarefa")
            }

            Spacer(modifier = Modifier.width(16.dp))

            Button(
                onClick = { },
                colors = ButtonDefaults.buttonColors(containerColor = Color.Red)
            ) {
                Text("Apagar")
            }
        }

        Text("Tarefas a fazer:", color = Color(0xFF1976D2))

        Row(
            verticalAlignment = Alignment.CenterVertically,
            modifier = Modifier
                .fillMaxWidth()
                .padding(vertical = 4.dp)
        ) {
            Text(
                text = "1- correr",
                modifier = Modifier.weight(1f),
                color = Color(0xFF1976D2)
            )

            IconButton(onClick = { }) {
                Icon(Icons.Default.Delete, contentDescription = null, tint = Color.Red)
            }

            IconButton(onClick = { }) {
                Icon(Icons.Default.Check, contentDescription = null, tint = Color.Black)
            }
        }

        Row(
            verticalAlignment = Alignment.CenterVertically,
            modifier = Modifier
                .fillMaxWidth()
                .padding(vertical = 4.dp)
        ) {
            Text(
                text = "2- ir para faculdade",
                modifier = Modifier.weight(1f),
                color = Color(0xFF1976D2)
            )

            IconButton(onClick = { }) {
                Icon(Icons.Default.Delete, contentDescription = null, tint = Color.Red)
            }

            IconButton(onClick = { }) {
                Icon(Icons.Default.Check, contentDescription = null, tint = Color.Black)
            }
        }

        Text("Tarefas Concluídas:", color = Color(0xFF1976D2))

        Column {
            Text("-cozinhar")
            Text("-cuidar da mell")
        }
        Button(
            onClick = { navController.navigate("login") },
            modifier = Modifier.align(Alignment.CenterHorizontally),
            colors = ButtonDefaults.buttonColors(containerColor = Color(0xFF1976D2))
        ) {
            Text("Sair")
        }
    }
}